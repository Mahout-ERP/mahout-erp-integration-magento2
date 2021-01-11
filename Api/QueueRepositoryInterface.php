<?php
declare(strict_types=1);

namespace Mahout\ERP\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface QueueRepositoryInterface
{

    /**
     * Save Queue
     * @param \Mahout\ERP\Api\Data\QueueInterface $queue
     * @return \Mahout\ERP\Api\Data\QueueInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Mahout\ERP\Api\Data\QueueInterface $queue
    );

    /**
     * Retrieve Queue
     * @param string $queueId
     * @return \Mahout\ERP\Api\Data\QueueInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($queueId);

    /**
     * Retrieve Queue matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Mahout\ERP\Api\Data\QueueSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Queue
     * @param \Mahout\ERP\Api\Data\QueueInterface $queue
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Mahout\ERP\Api\Data\QueueInterface $queue
    );

    /**
     * Delete Queue by ID
     * @param string $queueId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($queueId);
}

