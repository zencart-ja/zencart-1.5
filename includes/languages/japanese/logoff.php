<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: logoff.php 6992 2007-09-13 02:54:24Z ajeh $
 * @author obitastar
 */

define('HEADING_TITLE', 'ログアウト');
define('NAVBAR_TITLE', 'ログアウト');
define('TEXT_MAIN', 'ログアウトしました。<br /><br />メンバーズカートの内容はログアウト前の状態で保存されています。<br /><a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">再度ログイン</span></a>すれば、カート内の商品はご確認いただけます。');

?>