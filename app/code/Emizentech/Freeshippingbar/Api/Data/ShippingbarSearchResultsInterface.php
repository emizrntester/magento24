<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Api\Data;

interface ShippingbarSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Shippingbar list.
     * @return \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

