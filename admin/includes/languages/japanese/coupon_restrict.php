<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 */

define('HEADING_TITLE', 'クーポン券の商品/カテゴリ別の利用制限設定');
define('HEADING_TITLE_CATEGORY', 'カテゴリ別の利用制限');
define('HEADING_TITLE_PRODUCT', '商品別の利用制限');

define('HEADER_COUPON_ID', 'クーポンID');
define('HEADER_COUPON_NAME', 'クーポン名');
define('HEADER_CATEGORY_ID', 'カテゴリID');
define('HEADER_CATEGORY_NAME', 'カテゴリ名');
define('HEADER_PRODUCT_ID', '商品ID');
define('HEADER_PRODUCT_NAME', '商品名');
define('HEADER_RESTRICT_ALLOW', '許可');
define('HEADER_RESTRICT_DENY', '不許可');
define('HEADER_RESTRICT_REMOVE', '削除');
define('IMAGE_ALLOW', '許可');
define('IMAGE_DENY', '不許可');
define('IMAGE_REMOVE', '削除');
define('TEXT_ALL_CATEGORIES', 'All Categories');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Add All Category Products');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Remove All Category Products');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>For Add all Category Products, only Products not already set for restrictions will be added.<br />
                    For Delete all Category Products, only Products that are specified Deny or Allow will be removed.</strong>');

define('TEXT_MANUFACTURER', 'Manufacturer: ');
define('TEXT_CATEGORY', 'Category: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Category Not Completed');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Product Not Completed');
