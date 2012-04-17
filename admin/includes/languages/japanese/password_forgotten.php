<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 18784 2011-05-25 07:40:29Z drbyte $
 */

define('HEADING_TITLE', 'パスワード再送');

define('TEXT_ADMIN_EMAIL', '管理者メールアドレス: ');
define('TEXT_BUTTON_REQUEST_RESET', 'request reset');
define('TEXT_BUTTON_LOGIN', 'login');
define('TEXT_BUTTON_CANCEL', 'cancel');

define('ERROR_WRONG_EMAIL', '<p>入力されたメールアドレスが間違っています。</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>空白です。</p>');
define('MESSAGE_PASSWORD_SENT', '<p>新しいパスワードを送信しました。.</p>');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'あなたのリクエストは更新されました。');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'A new password was requested from %s.' . "\n\n" . 'Your new temporary password is:' . "\n\n   %s\n\nYou will be asked to choose a new password before logging in.\n\nThis temporary password expires in 24 hours.\n\n\n");

