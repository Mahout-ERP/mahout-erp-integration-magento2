<?php
declare(strict_types=1);

namespace Mahout\ERP\Api\Data;

interface QueueInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const RESPONSE = 'response';
    const REQUEST_RESULT = 'request_result';
    const REQUEST_RUNS = 'request_runs';
    const STATUS = 'status';
    const REQUEST_DELETE = 'request_delete';
    const UPDATED_AT = 'updated_at';
    const REQUEST_TYPE = 'request_type';
    const REQUEST_ENTITY_ID = 'request_entity_id';
    const REQUEST_METHOD = 'request_method';
    const REQUEST_DATA = 'request_data';
    const CREATED_AT = 'created_at';
    const QUEUE_ID = 'queue_id';

    /**
     * Get queue_id
     * @return string|null
     */
    public function getQueueId();

    /**
     * Set queue_id
     * @param string $queueId
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setQueueId($queueId);

    /**
     * Get request_type
     * @return string|null
     */
    public function getRequestType();

    /**
     * Set request_type
     * @param string $requestType
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestType($requestType);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Mahout\ERP\Api\Data\QueueExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Mahout\ERP\Api\Data\QueueExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Mahout\ERP\Api\Data\QueueExtensionInterface $extensionAttributes
    );

    /**
     * Get request_entity_id
     * @return string|null
     */
    public function getRequestEntityId();

    /**
     * Set request_entity_id
     * @param string $requestEntityId
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestEntityId($requestEntityId);

    /**
     * Get request_method
     * @return string|null
     */
    public function getRequestMethod();

    /**
     * Set request_method
     * @param string $requestMethod
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestMethod($requestMethod);

    /**
     * Get request_data
     * @return string|null
     */
    public function getRequestData();

    /**
     * Set request_data
     * @param string $requestData
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestData($requestData);

    /**
     * Get request_result
     * @return string|null
     */
    public function getRequestResult();

    /**
     * Set request_result
     * @param string $requestResult
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestResult($requestResult);

    /**
     * Get request_delete
     * @return string|null
     */
    public function getRequestDelete();

    /**
     * Set request_delete
     * @param string $requestDelete
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestDelete($requestDelete);

    /**
     * Get request_runs
     * @return string|null
     */
    public function getRequestRuns();

    /**
     * Set request_runs
     * @param string $requestRuns
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestRuns($requestRuns);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setStatus($status);

    /**
     * Get response
     * @return string|null
     */
    public function getResponse();

    /**
     * Set response
     * @param string $response
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setResponse($response);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setUpdatedAt($updatedAt);
}

