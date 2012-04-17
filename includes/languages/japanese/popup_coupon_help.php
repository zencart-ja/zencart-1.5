<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: popup_coupon_help.php 14141 2009-08-10 19:34:47Z wilt $
 */

define('HEADING_COUPON_HELP', 'クーポンを利用する');
define('TEXT_CLOSE_WINDOW', 'ウィンドウを閉じる [x]');
define('TEXT_COUPON_HELP_HEADER', '割引クーポンをご利用いただけました。');
define('TEXT_COUPON_HELP_NAME', '<br /><br />クーポン名: %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />このクーポンをご利用いただくと、商品価格から%s割引いたします。');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />%s以上お求めいただかないとこのクーポンはご利用いただけません。');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />このクーポンをご利用いただくと配送料が無料になります。');
define('TEXT_COUPON_HELP_DESC', '<br /><br />クーポンの種類: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />このクーポンは%sから%sの間だけご利用になれます。');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />商品・カテゴリ制限');
define('TEXT_COUPON_HELP_CATEGORIES', 'カテゴリ');
define('TEXT_COUPON_HELP_PRODUCTS', '商品');
define('TEXT_ALLOW', '割引可');
define('TEXT_DENY', '割引対象外');

define('TEXT_ALLOWED', ' (割引可)');
define('TEXT_DENIED', ' (割引対象外)');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>This coupon is valid for all categories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>This coupon is valid for all products.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','割引クーポンは' . TEXT_GV_NAMES . 'をお買い求めの際はご利用いただけない場合があります。');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>