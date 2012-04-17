<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', '割引クーポン');
define('HEADING_TITLE', '割引クーポン');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span>は無効なコードです。もう一度入力してください。');

define('HEADING_COUPON_HELP', '割引クーポンヘルプ');
define('TEXT_CLOSE_WINDOW', 'ウィンドウを閉じる [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">ご入力の割引クーポン引換コード');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">割引のご提供:</span> %s</p><p class="smallText">割引のご利用にあたって一部制限がある場合がございます。詳しくは下記をご覧下さい。</p>');
define('TEXT_COUPON_HELP_DATE', '<p>このクーポンは %s ～ %s の間に限り有効です。</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">割引クーポンの対象</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">カテゴリによる制限:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">商品による制限:</p>');
define('TEXT_ALLOW', '対象');
define('TEXT_DENY', '対象外');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>この割引クーポンは全カテゴリ対象です。</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>この割引クーポンは全商品対象です。</p>');
define('TEXT_CAT_ALLOWED', ' (このカテゴリでお使いいただけます)');
define('TEXT_CAT_DENIED', ' (このカテゴリは割引対象外です)');
define('TEXT_PROD_ALLOWED', ' (この商品でお使いいただけます)');
define('TEXT_PROD_DENIED', ' (この商品は割引対象外です)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">割引クーポンは' . TEXT_GV_NAMES . 'のご注文にはお使いになれません。一回のご注文につき一つのクーポンがご利用いただけます。</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', '割引クーポン照会... ');
define('TEXT_DISCOUNT_COUPON_ID', '割引クーポン引換コード: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>