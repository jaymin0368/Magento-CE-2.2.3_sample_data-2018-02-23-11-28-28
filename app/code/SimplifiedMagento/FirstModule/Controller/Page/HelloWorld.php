<?php


namespace SimplifiedMagento\FirstModule\Controller\Page;


use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\ObjectManager\ObjectManager;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Model\HeavyService;


class HelloWorld extends \Magento\Framework\App\Action\Action
{

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */

    protected $pencilInterface;
    protected $pencilFactory;
    protected  $productFactory;
    protected $_eventManager;
    protected $http;
    protected $heavyService;

    public function __construct(Context $context,
                                HeavyService $heavyService,
                                Http $http,
                                ManagerInterface $_eventManager,
                                PencilFactory $pencilFactory,
                                ProductFactory $productFactory,
                                PencilInterface $pencilInterface)
    {
        $this->pencilInterface = $pencilInterface;
        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        $this->http = $http;
        $this->heavyService = $heavyService;
        parent::__construct($context);
    }

    public function execute()
    {
//        echo $this->pencilInterface->getPencilType();
//        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
//        //$book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
//        //$student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
//        echo '<pre>'; print_r($pencil); die;
//        $customPencil = $this->pencilFactory->create(array('name'=> 'Hello World','school' => 'Xyz School'));
        //$product = $this->productFactory->create()->load(1);
        //$product->setName("Iphone 6");
        //$productName = $product->getIdBySku('MJ12');
//        echo '<pre>';
//        echo $productName;
        //echo "Main Function";
        /*$message = new \Magento\Framework\DataObject(array('greeting' => "Good Morning"));
        $this->_eventManager->dispatch('custom_event',['greeting' => $message]);
        echo $message->getGreeting();*/

        $id = $this->http->getParam('id',0);
        if($id == 1)
        {
            //Instantiated heavy service
            $this->heavyService->printHeavyServiceMessage();
        }
        else{
            echo "Heavy service not used";
        }


    }
}