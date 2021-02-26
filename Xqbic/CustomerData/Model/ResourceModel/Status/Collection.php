<?php

namespace Xqbic\CustomerData\Model\ResourceModel\Status;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'customer_id';


    protected function _construct()
    {
        $this->_init('Xqbic\CustomerData\Model\Status', 'Xqbic\CustomerData\Model\ResourceModel\Status');
    }

}
