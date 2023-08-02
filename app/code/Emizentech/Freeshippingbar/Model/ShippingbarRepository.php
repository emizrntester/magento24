<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Model;

use Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface;
use Emizentech\Freeshippingbar\Api\Data\ShippingbarInterfaceFactory;
use Emizentech\Freeshippingbar\Api\Data\ShippingbarSearchResultsInterfaceFactory;
use Emizentech\Freeshippingbar\Api\ShippingbarRepositoryInterface;
use Emizentech\Freeshippingbar\Model\ResourceModel\Shippingbar as ResourceShippingbar;
use Emizentech\Freeshippingbar\Model\ResourceModel\Shippingbar\CollectionFactory as ShippingbarCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class ShippingbarRepository implements ShippingbarRepositoryInterface
{

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ShippingbarCollectionFactory
     */
    protected $shippingbarCollectionFactory;

    /**
     * @var ShippingbarInterfaceFactory
     */
    protected $shippingbarFactory;

    /**
     * @var ResourceShippingbar
     */
    protected $resource;

    /**
     * @var Shippingbar
     */
    protected $searchResultsFactory;


    /**
     * @param ResourceShippingbar $resource
     * @param ShippingbarInterfaceFactory $shippingbarFactory
     * @param ShippingbarCollectionFactory $shippingbarCollectionFactory
     * @param ShippingbarSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceShippingbar $resource,
        ShippingbarInterfaceFactory $shippingbarFactory,
        ShippingbarCollectionFactory $shippingbarCollectionFactory,
        ShippingbarSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->shippingbarFactory = $shippingbarFactory;
        $this->shippingbarCollectionFactory = $shippingbarCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(ShippingbarInterface $shippingbar)
    {
        try {
            $this->resource->save($shippingbar);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the shippingbar: %1',
                $exception->getMessage()
            ));
        }
        return $shippingbar;
    }

    /**
     * @inheritDoc
     */
    public function get($shippingbarId)
    {
        $shippingbar = $this->shippingbarFactory->create();
        $this->resource->load($shippingbar, $shippingbarId);
        if (!$shippingbar->getId()) {
            throw new NoSuchEntityException(__('Shippingbar with id "%1" does not exist.', $shippingbarId));
        }
        return $shippingbar;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->shippingbarCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(ShippingbarInterface $shippingbar)
    {
        try {
            $shippingbarModel = $this->shippingbarFactory->create();
            $this->resource->load($shippingbarModel, $shippingbar->getShippingbarId());
            $this->resource->delete($shippingbarModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Shippingbar: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($shippingbarId)
    {
        return $this->delete($this->get($shippingbarId));
    }
}

