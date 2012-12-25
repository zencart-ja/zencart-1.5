<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: system_setup.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('SAVE_SYSTEM_SETTINGS', '設定を保存'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', 'システム環境を設定します。確認の上、「設定を保存」をクリックしてください。<br />※各々の値において、<b>末尾にスラッシュ「/」をつけない</b>ようにしてください。');
  define('TEXT_PAGE_HEADING', 'Zen Cartの設定　- システム設定');
  define('SERVER_SETTINGS', 'サーバ設定');
  define('PHYSICAL_PATH', '設置ディレクトリ');
  define('PHYSICAL_PATH_INSTRUCTION', '設置ディレクトリの物理パス');
  define('VIRTUAL_HTTP_PATH', 'サイトのURL');
  define('VIRTUAL_HTTP_PATH_INSTRUCTION', '');
  define('VIRTUAL_HTTPS_PATH', 'サイトのURL(SSL/不要なら空白)');
  define('VIRTUAL_HTTPS_PATH_INSTRUCTION', '');
  define('VIRTUAL_HTTPS_SERVER', 'SSLサーバのホスト名(不要なら空白)');
  define('VIRTUAL_HTTPS_SERVER_INSTRUCTION', 'Zen Cartディレクトリ用仮想HTTPSサーバ');
  define('TEXT_SSL_INTRO', '<strong>Do you already have an SSL Certificate? If so, enter the details below.</strong> If this is your first install, the supplied values are *only best-guesses*. Please verify the information with your hosting company if you are unsure of the correct details.');
  define('TEXT_SSL_WARNING', 'If your SSL certificate is already working, choose your SSL settings below. <br /><strong>DO NOT enable SSL here if you do not already have SSL enabled on your hosting account.</strong> If you enable SSL but the SSL address you provide does not work, you will not be able to access your admin site nor log in to your store. You can activate SSL later by editing settings in your configure.php file.');
  define('SSL_OPTIONS', 'SSL Details');
  define('ENABLE_SSL', 'ショップでSSLを有効にする');
  define('ENABLE_SSL_INSTRUCTION', 'SSLの動作を確認していない場合は「いいえ」にしておいてください。<br />');
  define('ENABLE_SSL_ADMIN', '管理画面でSSLを有効にする');
  define('ENABLE_SSL_ADMIN_INSTRUCTION', 'SSLの動作を確認していない場合は「いいえ」にしておいてください。<br />');
  define('REDISCOVER', 'Redetect defaults for this host');
