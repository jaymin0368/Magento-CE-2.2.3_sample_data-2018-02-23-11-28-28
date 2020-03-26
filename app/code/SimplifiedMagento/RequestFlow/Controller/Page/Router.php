<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ActionFactory;

class Router implements \Magento\Framework\App\RouterInterface
{

    protected $actionFactory;
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Match application action by request
     *
     * @param RequestInterface $request
     * @return ActionInterface
     */
    public function match(RequestInterface $request)
    {
        //  /customer/account/login
        $path =  trim($request->getPathInfo(),'/');
        // customer/account/login
        $paths = explode('-',$path);
        $request->setModuleName($paths[0]);
        $request->setControllerName($paths[1]);
        $request->setActionName($paths[2]);

        //now fwd the request to actionfactory so to get to know to server the particular url
        return $this->actionFactory->create('Magento\Framework\App\Action\Forward',['request'=>$request]);

    }
}