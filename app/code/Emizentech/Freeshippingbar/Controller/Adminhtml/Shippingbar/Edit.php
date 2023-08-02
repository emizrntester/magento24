<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Controller\Adminhtml\Shippingbar;

class Edit extends \Emizentech\Freeshippingbar\Controller\Adminhtml\Shippingbar
{

    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Edit action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('shippingbar_id');
        $model = $this->_objectManager->create(\Emizentech\Freeshippingbar\Model\Shippingbar::class);
        
        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Shippingbar no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('emizentech_freeshippingbar_shippingbar', $model);
        
        // 3. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Shippingbar') : __('New Shippingbar'),
            $id ? __('Edit Shippingbar') : __('New Shippingbar')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Shippingbars'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ? __('Edit Shippingbar %1', $model->getId()) : __('New Shippingbar'));
        return $resultPage;
    }
}

