<?php


namespace SimplifiedMagento\HelloWorld\Controller\Adminhtml\Post;

use  Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Backend\Model\View\Result\ForwardFactory;


class NewAction extends Action
{
    protected $forwardFactory;

    public function __construct(ForwardFactory $forwardFactory, Action\Context $context)
    {
        $this->forwardFactory = $forwardFactory;
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
        /** @var \Magento\Backend\Model\View\Result\Forward  $resultForward */
        $resultForward = $this->forwardFactory->create();
        return $resultForward->forward('edit');
    }
}