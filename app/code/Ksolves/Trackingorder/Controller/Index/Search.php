<?php
/**
 * @author Ksolves Team
 * @copyright Copyright (c) 2020 Ksolves (https://www.ksolves.com)
 * @package Ksolves_Trackingorder
 */
namespace Ksolves\Trackingorder\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Asset\Repository;
use Magento\Framework\App\RequestInterface ;
use Magento\Framework\Json\Helper\Data as JsonHelper;
use Magento\Framework\Controller\Result\JsonFactory;

class Search extends \Magento\Framework\App\Action\Action
{
    private $repository;
    private $request;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Message\ManagerInterface $messageManager
     */
    public function __construct(
        \Magento\Catalog\Api\ProductRepositoryInterfaceFactory $productRepositoryFactory,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\StateInterface $cacheState,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry,
        \Ksolves\Trackingorder\Helper\ConfigData $helperData,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Message\ManagerInterface $messageManager,
         JsonHelper $jsonHelper,
        JsonFactory $jsonFactory,

        Context $context,
        Repository $repository,
        RequestInterface $request
    ) {
        //echo "dfgdgdfgdfgdg";die;
        $this->_productRepositoryFactory = $productRepositoryFactory;
        $this->helperData = $helperData;
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheState = $cacheState;
        $this->_cacheFrontendPool = $cacheFrontendPool;
        $this->_pageFactory = $resultPageFactory;
        $this->registry = $registry;
        $this->_storeManager = $storeManager;
        $this->messageManager = $messageManager;
        $this->repository = $repository;
        $this->request = $request;
          $this->jsonHelper = $jsonHelper;
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);
    }
     
    /**
     * trackingorder search  action
     *
     * @return \Magento\Framework\View\Result\resultRedirectFactory
     * @return search result
     */
    public function execute()
    {
        $resultJson = $this->jsonFactory->create();               
        $id             = $this->getRequest()->getPost('order_id');
        $errmessage     ='';
        $data           = $this->getOrderId($id);
        if ($data) {
            $orderId    = $this->getOrderId($id);
        } else {
            $orderId    = $id;
        }

        $emailId       = $this->getRequest()->getPost('email_address'); 
         
        if($id== '' || $emailId == ''){
             $errmessage= __('Please enter order id And email');
        }
        $orderdata      = $this->_objectManager->create('Magento\Sales\Model\Order')->load($orderId);
               $orderItems = $orderdata->getAllItems();
        if (!$orderItems) {
            $errmessage = __('Please enter valid order id');
              return $resultJson->setData(['errormsg' => $errmessage]);
            // $this->messageManager->addErrorMessage(__('Please enter valid order id'));
            //$resultRedirect = $this->resultRedirectFactory->create();
            //return $resultRedirect->setPath('trackingorder/index/index');
        } 
        if ($emailId != $orderdata->getCustomerEmail()) {
           // $this->messageManager->addErrorMessage(__('Please enter correct email id'));
             $errmessage = __('Please enter correct email id');
               return $resultJson->setData(['errormsg' => $errmessage]);
           // $resultRedirect = $this->resultRedirectFactory->create();
            //return $resultRedirect->setPath('trackingorder/index/index');
        } else {
            $this->registry->register('orderdata', $orderdata);
            $this->resultPage = $this->_pageFactory->create();
            $this->resultPage->getConfig()->getTitle()->set((__('Track Order')));



              $httpBadRequestCode = 400;
              //Check isXmlHttpRequest               
                if (!$this->getRequest()->isXmlHttpRequest()) {
                    return $this->jsonFactory->create()->setHttpResponseCode($httpBadRequestCode);
                }
                // $html = $this->getLayout()->createBlock(
                //     'Ksolves\Trackingorder\Block\OrderStatus'
                // )->toHtml();
                $html = $this->resultPage->getLayout()
                        ->createBlock('Ksolves\Trackingorder\Block\OrderStatus')
                        ->setTemplate('Ksolves_Trackingorder::orderstatus.phtml')
                        ->toHtml();
              //  $this->getResponse()->setBody($block);
                /** @var \Magento\Framework\Controller\Result\Json $resultJson */
                return $resultJson->setData(['html' => $html]);               
                //return $this->resultPage;
        }
    }

    /**
     * return order Id
     * @return  int
     */
    public function getOrderId($incrementId)
    {
        
        $orderRepository = $this->_objectManager->create('\Magento\Sales\Model\OrderRepository');
        $searchCriteriaBuilder = $this->_objectManager->create('\Magento\Framework\Api\SearchCriteriaBuilder');
        $searchCriteriaBuilder->addFilter('increment_id', $incrementId);
        $order = $orderRepository->getList($searchCriteriaBuilder->create())->getItems();
        foreach ($order as $key => $value) {
            return $value->getId();
        }
    }
}
