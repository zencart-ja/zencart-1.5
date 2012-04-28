<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: coupon_restrict.php 16174 2010-05-02 14:10:30Z drbyte $
 * @author obitastar
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
define('TEXT_ALL_CATEGORIES', '全カテゴリ');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'カテゴリ内の全商品を追加する');
define('TEXT_ALL_PRODUCTS_REMOVE', 'カテゴリ内の全商品を削除する');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>『カテゴリ内の全商品を追加する』を選択した場合、指定されたカテゴリ内の、まだ制限が設定されていない商品だけが、選択された許可状態で追加されます。<br />『カテゴリ内の全商品を削除する』を選択した場合、指定されたカテゴリ内の商品のうち、許可、もしくは不許可の商品だけが削除されます。</strong>');

define('TEXT_MANUFACTURER', 'メーカー: ');
define('TEXT_CATEGORY', 'カテゴリ: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'カテゴリは適用できませんでした。');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', '商品は適用できませんでした。');
