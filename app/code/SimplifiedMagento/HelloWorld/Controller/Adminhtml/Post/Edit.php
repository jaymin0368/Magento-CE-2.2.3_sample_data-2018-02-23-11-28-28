<?php


namespace SimplifiedMagento\HelloWorld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\Registry;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use SimplifiedMagento\HelloWorld\Model\Post;


class Edit extends Action
{
    protected $pageFactory;
    protected $post;
    protected $registry;

    public function __construct(
        Post $post,
        PageFactory $pageFactory,
        Registry $registry,
        Action\Context $context)
    {
        $this->pageFactory = $pageFactory;
        $this->post = $post;
        $this->registry = $registry;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed("SimplifiedMagento_HelloWorld::parent");
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
        $id = $this->getRequest()->getParam("id");
        $model = $this->post;
        if($id)
        {
            $model->load($id);
            if(!$model->getId())
            {
                $this->messageManager->addErrorMessage(__('This member does not exists'));
                $result = $this->resultRedirectFactory->create();
                return $result->setPath('mageplaza_helloworld/post/index/');
            }
        }

        $data = $this->_getSession()->getFormData(true);
        if(!empty($data))
        {
            $model->setData($data);
        }
        $this->registry->register("post",$model);

        /** @var  Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->pageFactory->create();

        //$resultPage->addBreadcrumb($id ? __("Edit Post"):__("Add a new Post"));

        if($id)
        {
            $resultPage->getConfig()->getTitle()->prepend('Edit');
        }
        else{
            $resultPage->getConfig()->getTitle()->prepend('Add');
        }
        return $resultPage;
    }
}