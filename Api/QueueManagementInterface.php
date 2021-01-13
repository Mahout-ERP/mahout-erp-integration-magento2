<?php
declare(strict_types=1);

namespace Mahout\ERP\Api;

interface QueueManagementInterface
{
    /**
     * GET for Queue api
     * @param string $param
     * @return string
     */
    public function getQueue($param);

    /**
     * POST for Queue api
     * @param string $param
     * @return string
     */
    public function postQueue($param);

    /**
     * PUT for Queue api
     * @param string $param
     * @return string
     */
    public function putQueue($param);

    /**
     * DELETE for Queue api
     * @param string $param
     * @return string
     */
    public function deleteQueue($param);
}

