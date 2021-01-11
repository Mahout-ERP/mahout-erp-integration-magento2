<?php
declare(strict_types=1);

namespace Mahout\ERP\Model\ResourceModel\Queue;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'queue_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Mahout\ERP\Model\Queue::class,
            \Mahout\ERP\Model\ResourceModel\Queue::class
        );
    }
}

