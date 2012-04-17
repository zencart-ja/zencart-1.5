<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'ログイン');
define('HEADING_TITLE', 'いらっしゃいませ<br />サインインしてください');

define('HEADING_NEW_CUSTOMER', '【初めてのご来店・未登録の方は】<br /> お客様の情報を入力し、アカウントを作成してください。');
define('HEADING_NEW_CUSTOMER_SPLIT', 'New Customers');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'この機会に是非ご登録ください!<br />' . STORE_NAME . 'では、一度アカウントを作成していただきますと以降のご利用ではお客様情報などの入力を省くことができ、快適にショッピングを楽しんでいただけます。');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Have a PayPal account? Want to pay quickly with a credit card? Use the PayPal button below to use the Express Checkout option.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Or</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Create a Customer Profile with <strong>' . STORE_NAME . '</strong> which allows you to shop faster, track the status of your current orders, review your previous orders and take advantage of our other member\'s benefits.');

define('HEADING_RETURNING_CUSTOMER', '【アカウントをお持ちの方は】<br />ご登録されたメールアドレス・パスワードでログインしてください。');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Returning Customers');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'In order to continue, please login to your <strong>' . STORE_NAME . '</strong> account.');

define('TEXT_PASSWORD_FORGOTTEN', 'パスワードをお忘れですか?');

define('TEXT_LOGIN_ERROR', 'エラー: メールアドレスまたはパスワードが一致しませんでした。');
define('TEXT_VISITORS_CART', '<strong>注:</strong>お客様の&quot;ビジターズカート&quot;の内容は、ログインされると&quot;メンバーズカート&quot;の中に自動的に入ります。<a href="javascript:session_win();">[詳細]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">個人情報保護方針について</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">個人情報保護方針に同意される場合はチェックボックスをクリックしてください。内容はこちらでご覧いただけます。</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>個人情報保護方針</u></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">個人情報保護方針に同意します。</span>');

define('ERROR_SECURITY_ERROR', 'There was a security error when trying to login.');

define('TEXT_LOGIN_BANNED', 'Error: Access denied.');
