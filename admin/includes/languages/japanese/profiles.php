<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: profiles.php 19366 2011-08-28 20:21:09Z wilt $
 * @author obitastar
 */

define('HEADING_TITLE_ALL_PROFILES', '管理グループの権限設定');
define('HEADING_TITLE_INDIVIDUAL_PROFILE', '管理グループの編集 ： %s');
define('HEADING_TITLE_NEW_PROFILE', '新規管理グループ登録');

define('ERROR_NO_PROFILE_DEFINED', 'The option that you requested cannot be undertaken without specifying a profile');
define('ERROR_NO_PROFILE_NAME', '新しい管理グループ名を入力して下さい。');
define('ERROR_INVALID_PROFILE_NAME', '管理グループ名を入力して下さい。');
define('ERROR_DUPLICATE_PROFILE_NAME', '同じ管理グループ名が既に登録されています。別のグループ名に変更するか、既存のグループ名を変更して下さい。。');
define('ERROR_NO_PAGES_IN_PROFILE', '権限が選択されていません。必ず1つは選択して下さい。');
define('ERROR_UNABLE_TO_CREATE_PROFILE', '管理グループを作成できませんでした。');

define('SUCCESS_PROFILE_INSERTED', '新規管理グループを追加しました。');
define('SUCCESS_PROFILE_UPDATED', '管理グループ情報更新');
define('SUCCESS_PROFILE_NAME_UPDATED', '管理グループ名を更新しました。');
define('SUCCESS_PROFILE_DELETED', '管理グループを削除しました。');

define('TEXT_ID', 'ID');
define('TEXT_NAME', 'グループ名');
define('TEXT_USERS', 'ユーザー数');
define('TEXT_NO_PROFILES_FOUND', '管理グループはまだ登録されていません。');

define('IMAGE_ADD_PROFILE', '管理グループ追加');
define('IMAGE_RENAME', 'グループ名変更');
