<?php
declare(strict_types=1);

namespace Mahout\ERP\Api\Data;

interface QueueSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Queue list.
     * @return \Mahout\ERP\Api\Data\QueueInterface[]
     */
    public function getItems();

    /**
     * Set request_type list.
     * @param \Mahout\ERP\Api\Data\QueueInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

