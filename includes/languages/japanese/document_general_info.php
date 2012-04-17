<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_general_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */

define('TEXT_PRODUCT_NOT_FOUND', '商品が見つかりませんでした。');
define('TEXT_CURRENT_REVIEWS', '現在のレビュー:');
define('TEXT_MORE_INFORMATION', 'より詳しい情報はこの商品の<a href="%s" target="_blank">Webページ</a>へ。');
define('TEXT_DATE_ADDED', 'この商品は %s に登録されました。');
define('TEXT_DATE_AVAILABLE', 'この商品は %s に入荷予定です。');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'この商品をお求めの方は、他にこのような商品もお求めになっています');
define('TEXT_PRODUCT_OPTIONS', '選択してください: ');
define('TEXT_PRODUCT_MANUFACTURER', 'メーカー: ');
define('TEXT_PRODUCT_WEIGHT', '重量: ');
define('TEXT_PRODUCT_QUANTITY', ' 在庫数');
define('TEXT_PRODUCT_MODEL', 'モデル: ');



// previous next product
define('PREV_NEXT_PRODUCT', '商品 ');
define('PREV_NEXT_FROM', ' from '); 
define('IMAGE_BUTTON_PREVIOUS','前のアイテム');
define('IMAGE_BUTTON_NEXT','次のアイテム');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','商品リストに戻る');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [は: ');
define('TEXT_ATTRIBUTE_IS_FREE',' 今なら: 無料]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' 基本料金が適用されます');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','数量割引があります');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');

?>