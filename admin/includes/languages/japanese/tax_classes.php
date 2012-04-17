<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tax_classes.php 7167 2007-10-03 23:02:17Z drbyte $
 */

define('HEADING_TITLE', '税種別設定');

define('TABLE_HEADING_TAX_CLASS_ID', 'ID');
define('TABLE_HEADING_TAX_CLASSES', '税種別');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_INFO_EDIT_INTRO', '必要な変更を行ってください。');
define('TEXT_INFO_CLASS_TITLE', '税種別タイトル:');
define('TEXT_INFO_CLASS_DESCRIPTION', '説明:');
define('TEXT_INFO_DATE_ADDED', '登録日:');
define('TEXT_INFO_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_INSERT_INTRO', '新しい税種別についてのデータを入力してください。');
define('TEXT_INFO_DELETE_INTRO', 'この税種別を本当に削除しますか?');
define('TEXT_INFO_HEADING_NEW_TAX_CLASS', '新しい税種別');
define('TEXT_INFO_HEADING_EDIT_TAX_CLASS', '税種別を編集');
define('TEXT_INFO_HEADING_DELETE_TAX_CLASS', '税種別を削除');
define('ERROR_TAX_RATE_EXISTS_FOR_CLASS', 'ERROR: Cannot delete this Tax Class -- Tax Rates are currently linked to this Tax Class.');
define('ERROR_TAX_RATE_EXISTS_FOR_PRODUCTS', 'ERROR: Cannot delete this Tax Class -- There are %s products linked to this Tax Class.');
?>