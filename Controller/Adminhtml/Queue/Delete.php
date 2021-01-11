<?php
declare(strict_types=1);

namespace Mahout\ERP\Controller\Adminhtml\Queue;

class Delete extends \Mahout\ERP\Controller\Adminhtml\Queue
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('queue_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Mahout\ERP\Model\Queue::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Queue.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['queue_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Queue to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

