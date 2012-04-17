<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: geo_zones.php 4736 2006-10-13 07:11:44Z drbyte $
 */

define('HEADING_TITLE', '地域税設定');

define('TABLE_HEADING_COUNTRY', '国名');
define('TABLE_HEADING_COUNTRY_ZONE', '地域');
define('TABLE_HEADING_TAX_ZONES', '地域税');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', 'Zone Description');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', '操作');
//define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_TAX_AND_ZONES', ': Taxes &amp; Zones Defined');
define('TEXT_LEGEND_ONLY_ZONES', ': Zones Defined but not Taxes ');
define('TEXT_LEGEND_NOT_CONF', ': Not Configured ');

define('TEXT_INFO_HEADING_NEW_ZONE', '新しい地域');
define('TEXT_INFO_NEW_ZONE_INTRO', '新しい地域の情報を入力してください。');

define('TEXT_INFO_HEADING_EDIT_ZONE', '地域を編集');
define('TEXT_INFO_EDIT_ZONE_INTRO', '必要な変更を行ってください。');

define('TEXT_INFO_HEADING_DELETE_ZONE', '地域を削除');
define('TEXT_INFO_DELETE_ZONE_INTRO', 'この地域を本当に削除しますか?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', '新しいサブ地域');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO', '新しいサブ地域の情報を入力してください。');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', 'サブ地域を編集');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', '必要な変更を行ってください。');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', 'サブ地域を削除');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO', 'このサブ地域を本当に削除しますか?');

define('TEXT_INFO_DATE_ADDED', '登録日:');
define('TEXT_INFO_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_ZONE_NAME', '地域名:');
define('TEXT_INFO_NUMBER_ZONES', '地域の数:');
define('TEXT_INFO_ZONE_DESCRIPTION', '説明:');
define('TEXT_INFO_COUNTRY', '国名:');
define('TEXT_INFO_COUNTRY_ZONE', '地域:');
define('TYPE_BELOW', '全ての地域');
define('PLEASE_SELECT', '全ての地域');
define('TEXT_ALL_COUNTRIES', '全ての国');

define('TEXT_INFO_NUMBER_TAX_RATES','税率の数:');
define('ERROR_TAX_RATE_EXISTS','警告: この地域用に税率が設定されています。地域を削除する前に設定された税率を削除してください。');
?>