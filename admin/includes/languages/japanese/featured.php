<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */

define('HEADING_TITLE', 'おすすめ商品の管理');

define('TABLE_HEADING_PRODUCTS', '商品');
define('TABLE_HEADING_PRODUCTS_MODEL','型番');
define('TABLE_HEADING_PRODUCTS_PRICE', '商品価格/特別価格/セール価格');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','割引率(%)');
define('TABLE_HEADING_AVAILABLE_DATE', '提供開始日');
define('TABLE_HEADING_EXPIRES_DATE','提供終了日');
define('TABLE_HEADING_STATUS', 'ステータス');
define('TABLE_HEADING_ACTION', '操作');
define('TEXT_FEATURED_PRODUCT', '商品:');
define('TEXT_FEATURED_EXPIRES_DATE', '提供終了日:');
define('TEXT_FEATURED_AVAILABLE_DATE', '提供開始日:');

define('TEXT_INFO_DATE_ADDED', '作成日:');
define('TEXT_INFO_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_NEW_PRICE', '新しい価格:');
define('TEXT_INFO_ORIGINAL_PRICE', '元の価格:');
define('TEXT_INFO_PERCENTAGE', '割引率(%):');
define('TEXT_INFO_AVAILABLE_DATE', '提供開始日:');
define('TEXT_INFO_EXPIRES_DATE', '提供終了日:');
define('TEXT_INFO_STATUS_CHANGE', 'ステータス変更:');
define('TEXT_IMAGE_NONEXISTENT', '画像なし');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'おすすめ商品を削除');
define('TEXT_INFO_DELETE_INTRO', 'このおすすめ商品を本当に削除しますか?');

define('SUCCESS_FEATURED_PRE_ADD', 'Successful: Pre-Add of Featured ... please update the dates ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Warning: No Product ID specified ... nothing was added ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Warning: Product ID already Featured ... nothing was added ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Warning: Product ID is invalid ... nothing was added ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manually add new Featured by Product ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'On large databases, you may Manually Add a Featured by the Product ID<br /><br />This is best used when the page takes too long to render and trying to select a Product from the dropdown becomes difficult due to too many Products from which to choose.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Please enter the Product ID to be Pre-Added: ');
define('TEXT_INFO_MANUAL', 'Product ID to be Manually Added as a Featured');
?>