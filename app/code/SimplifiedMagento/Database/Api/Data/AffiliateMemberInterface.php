<?php


namespace SimplifiedMagento\Database\Api\Data;


interface AffiliateMemberInterface
{
    const NAME = "name";
    const ID = "entity_id";
    const STATUS = "status";
    const ADDRESS = "address";
    const PHONENUMBER = "phonenumber";
    const CREATEDAT = "created_at";
    const UPDATEDAT = "updated_at";


    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */

    //returns a string
    public function getName();

    /**
     * @return mixed
     */

    //returns a boolean
    public function getStatus();

    /**
     * @return mixed
     */

    //returns a string
    public function getAddress();

    /**
     * @return mixed
     */

    //returns a string
    public function getPhoneNumber();

    /**
     * @return mixed
     */

    //returns a string
    public function getCreatedAt();

    /**
     * @return mixed
     */
    //returns a string
    public function getUpdatedAt();

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setId($id);

    /** @param string $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setName($name);

    /**
     * @param boolean $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setStatus($status);

    /**
     * @param string $phoneNumber
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setPhoneNumber($phoneNumber);

    /**
     * @param string $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */

    public function setAddress($address);


    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension
     * @return $this
     */
    public function setExtensionAttributes(\SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionInterface $affiliateMemberExtension);
}