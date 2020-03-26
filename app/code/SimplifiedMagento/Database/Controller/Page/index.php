<?php


namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\AffiliateMember;

class index extends Action
{
    protected  $affiliateMemberFactory;
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
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
        $affiliateMember = $this->affiliateMemberFactory->create();
        /*$member = $affiliateMember->load(1);
        $member->setData('address','Hello World this is my new address');
        $member->save();*/

        /*$affiliateMember->addData(['name'=> 'Test','address' => 'updated new address','phonenumber'=> '0000']);
        $affiliateMember->save();*/
        //var_dump($member->getData());
        /*$member = $affiliateMember->load(5);
        $member->delete();*/
        $collection = $affiliateMember->getCollection()->addFieldToSelect(['status','name'])
            ->addFieldToFilter('status',array('eq' => 1));
        foreach ($collection as $item)
        {
            print_r($item->getData());
            echo '<br>';
        }

    }
}