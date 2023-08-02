<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Controller\Adminhtml\Shippingbar;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Response\Http;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;

class Index implements HttpGetActionInterface
{

    /**
     * @var Http
     */
    protected $http;
    protected $resultPageFactory;
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var PageFactory
     */
    /**
     * @var Json
     */
    protected $serializer;

    /**
     * Constructor
     *
     * @param PageFactory $resultPageFactory
     * @param Json $json
     * @param LoggerInterface $logger
     * @param Http $http
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Json $json,
        LoggerInterface $logger,
        Http $http,
        \Magento\Backend\App\Action\Context $context
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->serializer = $json;
        $this->logger = $logger;
        $this->http = $http;
        

        $this->resultPageFactory = $resultPageFactory;
    //    parent::__construct($context,$json,$logger,$http, $resultPageFactory );
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
      
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Shipping Bar'));

        return $resultPage;
    }

    /**
     * Create json response
     *
     * @return ResultInterface
     */
    public function jsonResponse($response = '')
    {
        $this->http->getHeaders()->clearHeaders();
        $this->http->setHeader('Content-Type', 'application/json');
        return $this->http->setBody(
            $this->serializer->serialize($response)
        );
    }
}

