<?php

namespace Xqbic\CustomerData\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Xqbic\CustomerData\Api\Data\StatusInterface;

/**
 * @method \Xqbic\CustomerData\Model\ResourceModel\Status getResource()
 * @method \Xqbic\CustomerData\Model\ResourceModel\Status\Collection getCollection()
 */
class Status extends AbstractModel implements StatusInterface, IdentityInterface
{
    const CACHE_TAG = 'customer_status';
    protected $_cacheTag = 'customer_status';
    protected $_eventPrefix = 'customer_status';



    protected function _construct()
    {
        $this->_init('Xqbic\CustomerData\Model\ResourceModel\Status');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get customer id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Set customer id
     *
     * @param int $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
    }

}
