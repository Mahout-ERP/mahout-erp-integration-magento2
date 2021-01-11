<?php
declare(strict_types=1);

namespace Mahout\ERP\Model\Data;

use Mahout\ERP\Api\Data\QueueInterface;

class Queue extends \Magento\Framework\Api\AbstractExtensibleObject implements QueueInterface
{

    /**
     * Get queue_id
     * @return string|null
     */
    public function getQueueId()
    {
        return $this->_get(self::QUEUE_ID);
    }

    /**
     * Set queue_id
     * @param string $queueId
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setQueueId($queueId)
    {
        return $this->setData(self::QUEUE_ID, $queueId);
    }

    /**
     * Get request_type
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->_get(self::REQUEST_TYPE);
    }

    /**
     * Set request_type
     * @param string $requestType
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestType($requestType)
    {
        return $this->setData(self::REQUEST_TYPE, $requestType);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Mahout\ERP\Api\Data\QueueExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Mahout\ERP\Api\Data\QueueExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Mahout\ERP\Api\Data\QueueExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get request_entity_id
     * @return string|null
     */
    public function getRequestEntityId()
    {
        return $this->_get(self::REQUEST_ENTITY_ID);
    }

    /**
     * Set request_entity_id
     * @param string $requestEntityId
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestEntityId($requestEntityId)
    {
        return $this->setData(self::REQUEST_ENTITY_ID, $requestEntityId);
    }

    /**
     * Get request_method
     * @return string|null
     */
    public function getRequestMethod()
    {
        return $this->_get(self::REQUEST_METHOD);
    }

    /**
     * Set request_method
     * @param string $requestMethod
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestMethod($requestMethod)
    {
        return $this->setData(self::REQUEST_METHOD, $requestMethod);
    }

    /**
     * Get request_data
     * @return string|null
     */
    public function getRequestData()
    {
        return $this->_get(self::REQUEST_DATA);
    }

    /**
     * Set request_data
     * @param string $requestData
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestData($requestData)
    {
        return $this->setData(self::REQUEST_DATA, $requestData);
    }

    /**
     * Get request_result
     * @return string|null
     */
    public function getRequestResult()
    {
        return $this->_get(self::REQUEST_RESULT);
    }

    /**
     * Set request_result
     * @param string $requestResult
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestResult($requestResult)
    {
        return $this->setData(self::REQUEST_RESULT, $requestResult);
    }

    /**
     * Get request_delete
     * @return string|null
     */
    public function getRequestDelete()
    {
        return $this->_get(self::REQUEST_DELETE);
    }

    /**
     * Set request_delete
     * @param string $requestDelete
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestDelete($requestDelete)
    {
        return $this->setData(self::REQUEST_DELETE, $requestDelete);
    }

    /**
     * Get request_runs
     * @return string|null
     */
    public function getRequestRuns()
    {
        return $this->_get(self::REQUEST_RUNS);
    }

    /**
     * Set request_runs
     * @param string $requestRuns
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setRequestRuns($requestRuns)
    {
        return $this->setData(self::REQUEST_RUNS, $requestRuns);
    }

    /**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get response
     * @return string|null
     */
    public function getResponse()
    {
        return $this->_get(self::RESPONSE);
    }

    /**
     * Set response
     * @param string $response
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setResponse($response)
    {
        return $this->setData(self::RESPONSE, $response);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Mahout\ERP\Api\Data\QueueInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}

