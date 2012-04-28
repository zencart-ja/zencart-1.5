<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE', 'おすすめ商品の管理');

define('TABLE_HEADING_PRODUCTS', '商品');
define('TABLE_HEADING_PRODUCTS_MODEL','型番');
define('TABLE_HEADING_PRODUCTS_PRICE', '商品価格/特別価格/セール価格');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','割引率(%)');
define('TABLE_HEADING_AVAILABLE_DATE', '提供開始日');
define('TABLE_HEADING_EXPIRES_DATE','提供終了日');
define('TABLE_HEADING_STATUS', 'ステータス');
define('TABLE_HEADING_ACTION', '操作');
define('TEXT_FEATURED_PRODUCT', '商品:');
define('TEXT_FEATURED_EXPIRES_DATE', '提供終了日:');
define('TEXT_FEATURED_AVAILABLE_DATE', '提供開始日:');

define('TEXT_INFO_DATE_ADDED', '作成日:');
define('TEXT_INFO_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_NEW_PRICE', '新しい価格:');
define('TEXT_INFO_ORIGINAL_PRICE', '元の価格:');
define('TEXT_INFO_PERCENTAGE', '割引率(%):');
define('TEXT_INFO_AVAILABLE_DATE', '提供開始日:');
define('TEXT_INFO_EXPIRES_DATE', '提供終了日:');
define('TEXT_INFO_STATUS_CHANGE', 'ステータス変更:');
define('TEXT_IMAGE_NONEXISTENT', '画像なし');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'おすすめ商品を削除');
define('TEXT_INFO_DELETE_INTRO', 'このおすすめ商品を本当に削除しますか?');

define('SUCCESS_FEATURED_PRE_ADD', '成功しました: おすすめ商品を追加しました。 ... 必要があれば、提供開始日・終了日を設定して下さい。');
define('WARNING_FEATURED_PRE_ADD_EMPTY', '警告: 商品IDが入力されていません。 ... 商品は追加されませんでした。');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', '警告: 既に登録されている商品です。 ... 商品は追加されませんでした。');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', '警告: 入力された商品IDは無効です。 ... 商品は追加されませんでした。');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', '商品IDからのおすすめ商品の登録');
define('TEXT_INFO_PRE_ADD_INTRO', '沢山の商品の中から、手動で商品IDを入力することによって、おすすめ商品を追加できます。<br /><br />商品数が膨大になれば、ページの読み込みやドロップダウンからの選択は手間がかかるため、商品IDから入力するこの方法が最適です。');
define('TEXT_PRE_ADD_PRODUCTS_ID', '追加したい商品のIDを入力: ');
define('TEXT_INFO_MANUAL', '商品IDからのおすすめ商品を追加する。');
?>