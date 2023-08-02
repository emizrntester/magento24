<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Model\ResourceModel\Shippingbar;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'shippingbar_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Emizentech\Freeshippingbar\Model\Shippingbar::class,
            \Emizentech\Freeshippingbar\Model\ResourceModel\Shippingbar::class
        );
    }
}

