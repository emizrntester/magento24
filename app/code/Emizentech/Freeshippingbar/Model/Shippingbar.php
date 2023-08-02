<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Model;

use Emizentech\Freeshippingbar\Api\Data\ShippingbarInterface;
use Magento\Framework\Model\AbstractModel;

class Shippingbar extends AbstractModel implements ShippingbarInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Emizentech\Freeshippingbar\Model\ResourceModel\Shippingbar::class);
    }

    /**
     * @inheritDoc
     */
    public function getShippingbarId()
    {
        return $this->getData(self::SHIPPINGBAR_ID);
    }

    /**
     * @inheritDoc
     */
    public function setShippingbarId($shippingbarId)
    {
        return $this->setData(self::SHIPPINGBAR_ID, $shippingbarId);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @inheritDoc
     */
    public function getPriority()
    {
        return $this->getData(self::PRIORITY);
    }

    /**
     * @inheritDoc
     */
    public function setPriority($priority)
    {
        return $this->setData(self::PRIORITY, $priority);
    }

    /**
     * @inheritDoc
     */
    public function getStoreViews()
    {
        return $this->getData(self::STORE_VIEWS);
    }

    /**
     * @inheritDoc
     */
    public function setStoreViews($storeViews)
    {
        return $this->setData(self::STORE_VIEWS, $storeViews);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerGroups()
    {
        return $this->getData(self::CUSTOMER_GROUPS);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerGroups($customerGroups)
    {
        return $this->setData(self::CUSTOMER_GROUPS, $customerGroups);
    }

    /**
     * @inheritDoc
     */
    public function getFromDate()
    {
        return $this->getData(self::FROM_DATE);
    }

    /**
     * @inheritDoc
     */
    public function setFromDate($fromDate)
    {
        return $this->setData(self::FROM_DATE, $fromDate);
    }

    /**
     * @inheritDoc
     */
    public function getToDate()
    {
        return $this->getData(self::TO_DATE);
    }

    /**
     * @inheritDoc
     */
    public function setToDate($toDate)
    {
        return $this->setData(self::TO_DATE, $toDate);
    }

    /**
     * @inheritDoc
     */
    public function getGoal()
    {
        return $this->getData(self::GOAL);
    }

    /**
     * @inheritDoc
     */
    public function setGoal($goal)
    {
        return $this->setData(self::GOAL, $goal);
    }

    /**
     * @inheritDoc
     */
    public function getFirstMessage()
    {
        return $this->getData(self::FIRST_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function setFirstMessage($firstMessage)
    {
        return $this->setData(self::FIRST_MESSAGE, $firstMessage);
    }

    /**
     * @inheritDoc
     */
    public function getBelowGoalMessage()
    {
        return $this->getData(self::BELOW_GOAL_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function setBelowGoalMessage($belowGoalMessage)
    {
        return $this->setData(self::BELOW_GOAL_MESSAGE, $belowGoalMessage);
    }

    /**
     * @inheritDoc
     */
    public function getAchieveMessage()
    {
        return $this->getData(self::ACHIEVE_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function setAchieveMessage($achieveMessage)
    {
        return $this->setData(self::ACHIEVE_MESSAGE, $achieveMessage);
    }

    /**
     * @inheritDoc
     */
    public function getClickable()
    {
        return $this->getData(self::CLICKABLE);
    }

    /**
     * @inheritDoc
     */
    public function setClickable($clickable)
    {
        return $this->setData(self::CLICKABLE, $clickable);
    }

    /**
     * @inheritDoc
     */
    public function getOpenNewPage()
    {
        return $this->getData(self::OPEN_NEW_PAGE);
    }

    /**
     * @inheritDoc
     */
    public function setOpenNewPage($openNewPage)
    {
        return $this->setData(self::OPEN_NEW_PAGE, $openNewPage);
    }

    /**
     * @inheritDoc
     */
    public function getPosition()
    {
        return $this->getData(self::POSITION);
    }

    /**
     * @inheritDoc
     */
    public function setPosition($position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * @inheritDoc
     */
    public function getAllowshow()
    {
        return $this->getData(self::ALLOWSHOW);
    }

    /**
     * @inheritDoc
     */
    public function setAllowshow($allowshow)
    {
        return $this->setData(self::ALLOWSHOW, $allowshow);
    }

    /**
     * @inheritDoc
     */
    public function getExcludePages()
    {
        return $this->getData(self::EXCLUDE_PAGES);
    }

    /**
     * @inheritDoc
     */
    public function setExcludePages($excludePages)
    {
        return $this->setData(self::EXCLUDE_PAGES, $excludePages);
    }
}

