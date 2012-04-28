<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 * @author obitastar
 */

define('NAVBAR_TITLE', 'ログイン');
define('HEADING_TITLE', 'いらっしゃいませ<br />サインインしてください');

define('HEADING_NEW_CUSTOMER', '【初めてのご来店・未登録の方は】<br /> お客様の情報を入力し、アカウントを作成してください。');
define('HEADING_NEW_CUSTOMER_SPLIT', 'はじめてのお客様');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'この機会に是非ご登録ください!<br />' . STORE_NAME . 'では、一度アカウントを作成していただきますと以降のご利用ではお客様情報などの入力を省くことができ、快適にショッピングを楽しんでいただけます。');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Have a PayPal account? Want to pay quickly with a credit card? Use the PayPal button below to use the Express Checkout option.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Or</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', '<strong>' . STORE_NAME . '</strong>にアカウントを作成していただきますと以降のご利用ではお客様情報などの入力を省くことができ、過去の注文履歴の確認など、快適にショッピングを楽しんでいただけます。');

define('HEADING_RETURNING_CUSTOMER', '【アカウントをお持ちの方は】<br />ご登録されたメールアドレス・パスワードでログインしてください。');
define('HEADING_RETURNING_CUSTOMER_SPLIT', '登録済みのお客様');

define('TEXT_RETURNING_CUSTOMER_SPLIT', '注文手続きを進めるために、<strong>' . STORE_NAME . '</strong> にログインして下さい。');

define('TEXT_PASSWORD_FORGOTTEN', 'パスワードをお忘れですか?');

define('TEXT_LOGIN_ERROR', 'エラー: メールアドレスまたはパスワードが一致しませんでした。');
define('TEXT_VISITORS_CART', '<strong>注:</strong>お客様の&quot;ビジターズカート&quot;の内容は、ログインされると&quot;メンバーズカート&quot;の中に自動的に入ります。<a href="javascript:session_win();">[詳細]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">個人情報保護方針について</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">個人情報保護方針に同意される場合はチェックボックスをクリックしてください。内容はこちらでご覧いただけます。</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>個人情報保護方針</u></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">個人情報保護方針に同意します。</span>');

define('ERROR_SECURITY_ERROR', 'ログイン中にアクセスエラーがありました。');

define('TEXT_LOGIN_BANNED', 'エラー: アクセスが拒否されました。');
