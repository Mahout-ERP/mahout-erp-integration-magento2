<?php
declare(strict_types=1);

namespace Mahout\ERP\Model\ResourceModel;

class Queue extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('mahout_erp_queue', 'queue_id');
    }
}

