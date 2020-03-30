<?php


namespace SimplifiedMagento\HelloWorld\Controller\Adminhtml\Post;
use Magento\Framework\App\ResponseInterface;
use Magento\Ui\Component\MassAction\Filter;
use SimplifiedMagento\HelloWorld\Model\ResourceModel\Post\CollectionFactory;
use Magento\Backend\Model\View\Result\RedirectFactory;

class MassDelete extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    protected $collectionFactory,$filter;
    protected $resultRedirectFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        CollectionFactory $collectionFactory,
        RedirectFactory $resultRedirectFactory,
        Filter $filter
    )
    {
        parent::__construct($context);
        $this->collectionFactory = $collectionFactory;
        $this->filter = $filter;
        $this->resultRedirectFactory = $resultRedirectFactory;
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
        // TODO: Implement execute() method.

        $collection = $this->filter->getCollection($this->collectionFactory->create());
        foreach ($collection as $item)
        {
            $item->delete();
        }
        $size = $collection->getSize();
        $this->messageManager->addSuccessMessage(__('A total of '.$size.' have been deleted'));
        $resultRedirect =$this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/index');
    }
}