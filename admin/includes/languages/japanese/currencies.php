<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 18931 2011-06-13 15:22:34Z drbyte $
 */

define('HEADING_TITLE', '通貨設定');

define('TABLE_HEADING_CURRENCY_NAME', '通貨');
define('TABLE_HEADING_CURRENCY_CODES', 'コード');
define('TABLE_HEADING_CURRENCY_VALUE', '設定値');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_INFO_EDIT_INTRO', '必要な変更を加えてください。');
define('TEXT_INFO_CURRENCY_TITLE', '名称:');
define('TEXT_INFO_CURRENCY_CODE', 'コード:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', '左側シンボル:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', '右側シンボル:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', '小数点の記号:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', '3桁ごとの区切り:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', '小数点以下の桁数:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', '更新日:');
define('TEXT_INFO_CURRENCY_VALUE', '設定値:');
define('TEXT_INFO_CURRENCY_EXAMPLE', '表示例:');
define('TEXT_INFO_INSERT_INTRO', '新しい通貨に関する情報を入力してください。');
define('TEXT_INFO_DELETE_INTRO', 'この通貨を本当に削除しますか?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', '新しい通貨');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', '通貨を編集');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', '通貨を削除');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (通貨の値を直接入力して更新する必要があります。)');
define('TEXT_INFO_CURRENCY_UPDATED', '%s (%s)の為替レートの更新に成功しました。(%s経由)');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'エラー: デフォルトの通貨は削除できません。他の通過をデフォルトに設定して、もう一度操作してください。');
define('ERROR_CURRENCY_INVALID', 'エラー:  %s (%s)の為替レートの更新に失敗しました。(%s経由) 有効な通貨コードか確認してください。');
define('WARNING_PRIMARY_SERVER_FAILED', '警告: 為替レートを参照しているプライマリサーバ(%s)への接続が失敗しました。%s (%s) - セカンダリサーバに接続を試みます。');
define('ERROR_INVALID_CURRENCY_ENTRY', 'ERROR: The information you submitted was incomplete, and has not been saved. You must specify a currency code and a name.');
