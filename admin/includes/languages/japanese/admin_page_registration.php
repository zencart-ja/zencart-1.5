<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE', '管理ページの登録');
define('TEXT_PAGE_KEY', 'ページのキー');
define('TEXT_LANGUAGE_KEY', 'ページ名');
define('TEXT_MAIN_PAGE', 'ページのファイル名');
define('TEXT_PAGE_PARAMS', 'ページの変数');
define('TEXT_MENU_KEY', 'メニュー');
define('TEXT_DISPLAY_ON_MENU', 'メニューに表示しますか？');
define('TEXT_SORT_ORDER', '整列順');

define('TEXT_EXAMPLE_PAGE_KEY', '(例： myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(例： BOX_MY_MOD_PAGE_NAME)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(例： FILENAME_PAGE_NAME)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(例： option=1 or, more usually, leave blank)');
define('TEXT_SELECT_MENU', '-メニューを選択してください-');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Page key not entered. All admin pages must have a unique page key.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Page key already exists. Page keys must be unique.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Language key not entered. All admin page must have a language key that defines the text on any menu link.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'The language key entered has not been defined. Please check that it has been spelt correctly.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'The filename definition for the page has not been entered.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'The filename definition entered does not exist. Please check that it has been spelt correctly.');
define('ERROR_MENU_NOT_CHOSEN', 'Menu not chosen. You must associate the new page with a menu, even if it will not be displayed on that menu.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Your admin page has been registered.');
