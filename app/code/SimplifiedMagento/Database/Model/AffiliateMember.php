<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends  AbstractExtensibleModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        //initialize our resource model to this model
        $this->_init(AffiliateMemberResource::class);
    }

    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONENUMBER);
    }

    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATEDAT);
    }

    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATEDAT);
    }

    public function setName($name)
    {
        return $this->setName(AffiliateMemberInterface::NAME,$name);
    }

    public function setStatus($status)
    {
        // TODO: Implement setStatus() method.
        return $this->setName(AffiliateMemberInterface::STATUS,$status);
    }

    public function setPhoneNumber($phoneNumber)
    {
        // TODO: Implement setPhoneNumber() method.
        return $this->setName(AffiliateMemberInterface::PHONENUMBER,$phoneNumber);
    }

    public function setAddress($address)
    {
        // TODO: Implement setAddress() method.
        return $this->setName(AffiliateMemberInterface::ADDRESS,$address);
    }

    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->getExtensionAttributes();
    }

    /**
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension)
    {
        return $this->setExtensionAttributes($affiliateMemberExtension);
    }
}