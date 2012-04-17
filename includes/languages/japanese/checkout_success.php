<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 14198 2009-08-18 22:32:11Z drbyte $
 */

define('NAVBAR_TITLE_1', 'レジへ進む');
define('NAVBAR_TITLE_2', '手続完了');

define('HEADING_TITLE', 'ご注文の手続きが完了しました。');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', '下記商品についてお知らせメールを希望する');
define('TEXT_SEE_ORDERS', '<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">マイページ</a>からお客様のご注文履歴をご覧いただけます。');
define('TEXT_CONTACT_STORE_OWNER', 'ご質問などございましたら<a href="' . zen_href_link(FILENAME_CONTACT_US) . '">お問い合わせページ</a>からどうぞ。');
define('TEXT_THANKS_FOR_SHOPPING', 'ご注文ありがとうございました');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', '\'%s\'こちらから、後で商品をダウンロードすることもできます。');


define('TEXT_YOUR_ORDER_NUMBER', '<strong>ご注文番号:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTE: To complete your order, a temporary account was created. You may close this account by clicking Log Off. Clicking Log Off also ensures that your receipt and purchase information is not visible to the next person using this computer. If you wish to continue shopping, feel free! You may log off at anytime using the link at the top of the page.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Thank you for shopping. Please click the Log Off link to ensure that your receipt and purchase information is not visible to the next person using this computer.');
