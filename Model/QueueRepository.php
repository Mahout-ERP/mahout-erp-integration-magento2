<?php
declare(strict_types=1);

namespace Mahout\ERP\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use Mahout\ERP\Api\Data\QueueInterfaceFactory;
use Mahout\ERP\Api\Data\QueueSearchResultsInterfaceFactory;
use Mahout\ERP\Api\QueueRepositoryInterface;
use Mahout\ERP\Model\ResourceModel\Queue as ResourceQueue;
use Mahout\ERP\Model\ResourceModel\Queue\CollectionFactory as QueueCollectionFactory;

class QueueRepository implements QueueRepositoryInterface
{

    private $storeManager;

    protected $dataObjectProcessor;

    private $collectionProcessor;

    protected $extensibleDataObjectConverter;
    protected $queueCollectionFactory;

    protected $searchResultsFactory;

    protected $extensionAttributesJoinProcessor;

    protected $queueFactory;

    protected $resource;

    protected $dataObjectHelper;

    protected $dataQueueFactory;


    /**
     * @param ResourceQueue $resource
     * @param QueueFactory $queueFactory
     * @param QueueInterfaceFactory $dataQueueFactory
     * @param QueueCollectionFactory $queueCollectionFactory
     * @param QueueSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceQueue $resource,
        QueueFactory $queueFactory,
        QueueInterfaceFactory $dataQueueFactory,
        QueueCollectionFactory $queueCollectionFactory,
        QueueSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->queueFactory = $queueFactory;
        $this->queueCollectionFactory = $queueCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataQueueFactory = $dataQueueFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Mahout\ERP\Api\Data\QueueInterface $queue
    ) {
        /* if (empty($queue->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $queue->setStoreId($storeId);
        } */
        
        $queueData = $this->extensibleDataObjectConverter->toNestedArray(
            $queue,
            [],
            \Mahout\ERP\Api\Data\QueueInterface::class
        );
        
        $queueModel = $this->queueFactory->create()->setData($queueData);
        
        try {
            $this->resource->save($queueModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the queue: %1',
                $exception->getMessage()
            ));
        }
        return $queueModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($queueId)
    {
        $queue = $this->queueFactory->create();
        $this->resource->load($queue, $queueId);
        if (!$queue->getId()) {
            throw new NoSuchEntityException(__('Queue with id "%1" does not exist.', $queueId));
        }
        return $queue->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->queueCollectionFactory->create();
        
        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \Mahout\ERP\Api\Data\QueueInterface::class
        );
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Mahout\ERP\Api\Data\QueueInterface $queue
    ) {
        try {
            $queueModel = $this->queueFactory->create();
            $this->resource->load($queueModel, $queue->getQueueId());
            $this->resource->delete($queueModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Queue: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($queueId)
    {
        return $this->delete($this->get($queueId));
    }
}

