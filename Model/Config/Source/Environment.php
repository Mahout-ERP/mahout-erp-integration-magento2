<?php
declare(strict_types=1);

namespace Mahout\ERP\Model\Config\Source;

class Environment implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'dev', 'label' => __('dev')],['value' => 'prod', 'label' => __('prod')]];
    }

    public function toArray()
    {
        return ['dev' => __('dev'),'prod' => __('prod')];
    }
}

