<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 18784 2011-05-25 07:40:29Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE', 'パスワード再送');

define('TEXT_ADMIN_EMAIL', '管理者メールアドレス: ');
define('TEXT_BUTTON_REQUEST_RESET', 'パスワードのリセット');
define('TEXT_BUTTON_LOGIN', 'ログイン');
define('TEXT_BUTTON_CANCEL', 'キャンセル');

define('ERROR_WRONG_EMAIL', '<p>入力されたメールアドレスが間違っています。</p>');
define('ERROR_WRONG_EMAIL_NULL', '<p>空白です。</p>');
define('MESSAGE_PASSWORD_SENT', '<p>新しいパスワードを送信しました。</p>');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'あなたのリクエストは更新されました。');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', ' %s から新しいパスワードの要請がありました。' . "\n\n" . '新しい仮パスワード:' . "\n\n   %s\n\nログイン画面にて仮パスワードを入力後、新しいパスワードを設定して下さい。\n\nこの仮パスワードは24時間で期限切れになります。\n\n\n");

