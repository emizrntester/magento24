# Mage2 Module Emizentech Freeshippingbar

    ``emizentech/module-freeshippingbar``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Based on the customer's current shopping cart total,  Emizentech Free Shipping Bar Magento 2 will automatically calculate and show a relevant message to the buyer. There are three standard messages which match three shopping phases:

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Emizentech`
 - Enable the module by running `php bin/magento module:enable Emizentech_Freeshippingbar`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require emizentech/module-freeshippingbar`
 - enable the module by running `php bin/magento module:enable Emizentech_Freeshippingbar`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Block
	- Shippingbar\Index > shippingbar/index.phtml

 - Model
	- Shippingbar


## Attributes



