<?php
declare(strict_types=1);

namespace Mahout\ERP\Model;

use Magento\Framework\Api\DataObjectHelper;
use Mahout\ERP\Api\Data\QueueInterface;
use Mahout\ERP\Api\Data\QueueInterfaceFactory;

class Queue extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'mahout_erp_queue';
    protected $queueDataFactory;

    protected $dataObjectHelper;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param QueueInterfaceFactory $queueDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Mahout\ERP\Model\ResourceModel\Queue $resource
     * @param \Mahout\ERP\Model\ResourceModel\Queue\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        QueueInterfaceFactory $queueDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Mahout\ERP\Model\ResourceModel\Queue $resource,
        \Mahout\ERP\Model\ResourceModel\Queue\Collection $resourceCollection,
        array $data = []
    ) {
        $this->queueDataFactory = $queueDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve queue model with queue data
     * @return QueueInterface
     */
    public function getDataModel()
    {
        $queueData = $this->getData();
        
        $queueDataObject = $this->queueDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $queueDataObject,
            $queueData,
            QueueInterface::class
        );
        
        return $queueDataObject;
    }
}

