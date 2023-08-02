<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Emizentech\Freeshippingbar\Api\Data;

interface ShippingbarInterface
{

    const FROM_DATE = 'from_date';
    const STORE_VIEWS = 'store_views';
    const FIRST_MESSAGE = 'first_message';
    const BELOW_GOAL_MESSAGE = 'below_goal_message';
    const TO_DATE = 'to_date';
    const NAME = 'name';
    const ALLOWSHOW = 'allowshow';
    const EXCLUDE_PAGES = 'exclude_pages';
    const CLICKABLE = 'clickable';
    const PRIORITY = 'priority';
    const POSITION = 'position';
    const ACHIEVE_MESSAGE = 'achieve_message';
    const OPEN_NEW_PAGE = 'open_new_page';
    const SHIPPINGBAR_ID = 'shippingbar_id';
    const CUSTOMER_GROUPS = 'customer_groups';
    const STATUS = 'status';
    const GOAL = 'goal';

    /**
     * Get shippingbar_id
     * @return string|null
     */
    public function getShippingbarId();

    /**
     * Set shippingbar_id
     * @param string $shippingbarId
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setShippingbarId($shippingbarId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setName($name);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setStatus($status);

    /**
     * Get priority
     * @return string|null
     */
    public function getPriority();

    /**
     * Set priority
     * @param string $priority
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setPriority($priority);

    /**
     * Get store_views
     * @return string|null
     */
    public function getStoreViews();

    /**
     * Set store_views
     * @param string $storeViews
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setStoreViews($storeViews);

    /**
     * Get customer_groups
     * @return string|null
     */
    public function getCustomerGroups();

    /**
     * Set customer_groups
     * @param string $customerGroups
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setCustomerGroups($customerGroups);

    /**
     * Get from_date
     * @return string|null
     */
    public function getFromDate();

    /**
     * Set from_date
     * @param string $fromDate
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setFromDate($fromDate);

    /**
     * Get to_date
     * @return string|null
     */
    public function getToDate();

    /**
     * Set to_date
     * @param string $toDate
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setToDate($toDate);

    /**
     * Get goal
     * @return string|null
     */
    public function getGoal();

    /**
     * Set goal
     * @param string $goal
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setGoal($goal);

    /**
     * Get first_message
     * @return string|null
     */
    public function getFirstMessage();

    /**
     * Set first_message
     * @param string $firstMessage
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setFirstMessage($firstMessage);

    /**
     * Get below_goal_message
     * @return string|null
     */
    public function getBelowGoalMessage();

    /**
     * Set below_goal_message
     * @param string $belowGoalMessage
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setBelowGoalMessage($belowGoalMessage);

    /**
     * Get achieve_message
     * @return string|null
     */
    public function getAchieveMessage();

    /**
     * Set achieve_message
     * @param string $achieveMessage
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setAchieveMessage($achieveMessage);

    /**
     * Get clickable
     * @return string|null
     */
    public function getClickable();

    /**
     * Set clickable
     * @param string $clickable
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setClickable($clickable);

    /**
     * Get open_new_page
     * @return string|null
     */
    public function getOpenNewPage();

    /**
     * Set open_new_page
     * @param string $openNewPage
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setOpenNewPage($openNewPage);

    /**
     * Get position
     * @return string|null
     */
    public function getPosition();

    /**
     * Set position
     * @param string $position
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setPosition($position);

    /**
     * Get allowshow
     * @return string|null
     */
    public function getAllowshow();

    /**
     * Set allowshow
     * @param string $allowshow
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setAllowshow($allowshow);

    /**
     * Get exclude_pages
     * @return string|null
     */
    public function getExcludePages();

    /**
     * Set exclude_pages
     * @param string $excludePages
     * @return \Emizentech\Freeshippingbar\Shippingbar\Api\Data\ShippingbarInterface
     */
    public function setExcludePages($excludePages);
}

