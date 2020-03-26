<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;



class ResponseType extends Action
{
    protected $pageFactory,$jsonFactory,$raw,$forwardFactory,$redirectFactory;

    public function __construct(Context $context, RedirectFactory $redirectFactory, Raw $raw, JsonFactory $jsonFactory, PageFactory $pageFactory, ForwardFactory $forwardFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        //return $this->pageFactory->create(); //page result
        //return $this->jsonFactory->create()->setData(['key' => 'value','key2'=> ['1','two']]); //json result
        //$result = $this->raw->setContents('Hello World'); //raw result
        /*$result = $this->forwardFactory->create();
        $result->setModule('noroutefound')->setController('page')->forward('customnoroute'); forward result, you see url remains
           same but the result is shown of 404 not found
        */
        $result = $this->redirectFactory->create();
        $result->setPath('noroutefound/page/customnoroute'); //redirect to specific page
        return $result;
    }
}