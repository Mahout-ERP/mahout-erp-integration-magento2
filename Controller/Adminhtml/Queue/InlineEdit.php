<?php
declare(strict_types=1);

namespace Mahout\ERP\Controller\Adminhtml\Queue;

class InlineEdit extends \Magento\Backend\App\Action
{

    protected $jsonFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Inline edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];
        
        if ($this->getRequest()->getParam('isAjax')) {
            $postItems = $this->getRequest()->getParam('items', []);
            if (!count($postItems)) {
                $messages[] = __('Please correct the data sent.');
                $error = true;
            } else {
                foreach (array_keys($postItems) as $modelid) {
                    /** @var \Mahout\ERP\Model\Queue $model */
                    $model = $this->_objectManager->create(\Mahout\ERP\Model\Queue::class)->load($modelid);
                    try {
                        $model->setData(array_merge($model->getData(), $postItems[$modelid]));
                        $model->save();
                    } catch (\Exception $e) {
                        $messages[] = "[Queue ID: {$modelid}]  {$e->getMessage()}";
                        $error = true;
                    }
                }
            }
        }
        
        return $resultJson->setData([
            'messages' => $messages,
            'error' => $error
        ]);
    }
}

