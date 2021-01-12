# Module Mahout ERP

    ``mahout-erp/module-erp``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)


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
 - Add the composer repository to the configuration by running:
   - `composer config repositories.mahout_erp composer https://packagist.org/`
 - Install the module composer by running:
   - `composer require mahout-erp/module-erp`
 - enable the module by running:
   - `php bin/magento module:enable Mahout_ERP`
 - apply database updates by running:
   - `php bin/magento setup:upgrade`
 - Flush the cache by running:
   - `php bin/magento cache:flush`


## Configuration

 - Enable (mahout_erp/configuration/enable)
 - Environment (mahout_erp/configuration/environment)
 - Development Token (mahout_erp/configuration/token_dev)
 - Production Token (mahout_erp/configuration/token_prod)
 - Development Public Key (mahout_erp/configuration/public_key_dev)
 - Production Public Key (mahout_erp/configuration/public_key_prod)
 - Debug (mahout_erp/configuration/debug)


## Specifications

 - Model
    - Queue

    - sales_order_invoice_register > Mahout\ERP\Observer\Sales\OrderInvoiceRegister

 - Cronjob
    - mahout_erp_queue

 - Crongroup
    - default
