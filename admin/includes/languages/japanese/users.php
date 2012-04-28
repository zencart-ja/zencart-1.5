<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: users.php 18773 2011-05-20 01:00:21Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE', '管理者の設定');

define('IMAGE_ADD_USER', '管理者の追加');
define('IMAGE_RESET_PWD', 'パスワードをリセット');

define('TEXT_ID', 'ID');
define('TEXT_NAME', '管理者名');
define('TEXT_EMAIL', 'メールアドレス');
define('TEXT_PROFILE', '管理グループ');
define('TEXT_PASSWORD', 'パスワード');
define('TEXT_CONFIRM_PASSWORD', 'パスワード(確認用)');
define('TEXT_NO_USERS_FOUND', '管理者は見つかりません');
define('TEXT_CONFIRM_DELETE', '削除する場合は確認を押してください。');

define('ERROR_NO_USER_DEFINED', 'The option that you requested cannot be undertaken without specifying a user');
define('ERROR_USER_MUST_HAVE_PROFILE', '管理グループを設定して下さい。');
define('ERROR_DUPLICATE_USER', '同じ管理者名が既に登録されています。別の管理者名に変更して下さい。');
define('ERROR_ADMIN_NAME_TOO_SHORT', '管理者名は半角英数字、%s文字以上でなければなりません。');
define('ERROR_PASSWORD_TOO_SHORT', 'パスワードは%s文字以上でなければなりません');
define('SUCCESS_NEW_USER_ADDED', '新しい管理者を追加しました。');
define('SUCCESS_USER_DETAILS_UPDATED', '管理者情報を更新しました。');
define('SUCCESS_PASSWORD_UPDATED', 'パスワードを更新しました。');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'メールアドレスに不備があるか、入力されていない為、登録することができません。');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', '管理者名に不備があるか、入力されていない為、登録することができません。');
