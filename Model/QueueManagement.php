<?php
declare(strict_types=1);

namespace Mahout\ERP\Model;

class QueueManagement implements \Mahout\ERP\Api\QueueManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function getQueue($param)
    {
        return 'hello api GET return the $param ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function postQueue($param)
    {
        return 'hello api POST return the $param ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function putQueue($param)
    {
        return 'hello api PUT return the $param ' . $param;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteQueue($param)
    {
        return 'hello api DELETE return the $param ' . $param;
    }
}

