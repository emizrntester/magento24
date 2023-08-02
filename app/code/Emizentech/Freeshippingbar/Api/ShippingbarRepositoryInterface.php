<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ShippingbarRepositoryInterface
{

    /**
     * Save Shippingbar
     * @param \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface $shippingbar
     * @return \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface $shippingbar
    );

    /**
     * Retrieve Shippingbar
     * @param string $shippingbarId
     * @return \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($shippingbarId);

    /**
     * Retrieve Shippingbar matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Emizentech\Freeshippingbar\Api\Data\ShippingbarSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Shippingbar
     * @param \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface $shippingbar
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface $shippingbar
    );

    /**
     * Delete Shippingbar by ID
     * @param string $shippingbarId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($shippingbarId);
}

