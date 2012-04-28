<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 19287 2011-07-28 15:51:25Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE_MODULES_PAYMENT', '支払いモジュールの設定');
define('HEADING_TITLE_MODULES_SHIPPING', '配送モジュールの設定');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', '注文合計モジュールの設定');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', '商品タイプモジュールの設定');

define('TABLE_HEADING_MODULES', 'モジュール');
define('TABLE_HEADING_SORT_ORDER', 'ソート順');
define('TABLE_HEADING_ORDERS_STATUS','注文ステータス');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_MODULE_DIRECTORY', 'モジュールディレクトリ:');
define('WARNING_MODULES_SORT_ORDER','WARNING: YOU HAVE DUPLICATE SORT ORDERS WHICH WILL RESULT IN CALCULATION ERRORS<br />PLEASE CORRECT THESE ISSUES NOW!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: module not loaded due to missing language file: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', '警告：オンラインストアの管理設定が変更されました。');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の [%s] モジュールの設定が、Zen Cartのadminユーザー %s によって変更されました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の設定が変更されました。[%s] モジュールがZen Cartのadminユーザー %s によってインストールされました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'このメールは、Zen Cartの管理画面にて設定変更を行った際に送られる自動送信メールです: ' . "\n\n" . '注意: 管理画面の設定が変更されました。 [%s] モジュールがZen Cartのadminユーザー %s によってアンインストールされました。' . "\n\n" . 'もし、この変更に記憶がなかった場合は、すぐに設定を変更された方がいいでしょう。' . "\n\n" . 'この変更が周知のことであれば、このメールは無視しても構いません。');
define('TEXT_DELETE_INTRO', 'このモジュールをアンインストールしてもよろしいでしょうか？');
define('TEXT_WARNING_SSL_EDIT', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">For security reasons, Editing of this module is disabled until your Admin is configured for SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERT: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">For security reasons, Installation of this module is disabled until your Admin is configured for SSL</a>.');