# Mage2 Module Mahout ERP

    ``mahout/module-erp``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Module for integration with Mahout ERP Cloud

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Mahout`
 - Enable the module by running `php bin/magento module:enable Mahout_ERP`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require mahout/module-erp`
 - enable the module by running `php bin/magento module:enable Mahout_ERP`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enable (mahout_erp/configuration/enable)

 - Environment (mahout_erp/configuration/environment)

 - Development Token (mahout_erp/configuration/token_dev)

 - Production Token (mahout_erp/configuration/token_prod)

 - Development Public Key (mahout_erp/configuration/public_key_dev)

 - Production Public Key (mahout_erp/configuration/public_key_prod)


## Specifications

 - Model
	- Queue

 - Observer
	- controller_action_catalog_product_save_entity_after > Mahout\ERP\Observer\Controller\ActionCatalogProductSaveEntityAfter

 - Observer
	- sales_order_invoice_register > Mahout\ERP\Observer\Sales\OrderInvoiceRegister

 - Cronjob
	- mahout_erp_queue

 - Crongroup
	- default


## Attributes



