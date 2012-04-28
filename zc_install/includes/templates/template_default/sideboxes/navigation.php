<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: navigation.php 17018 2010-07-27 07:25:41Z drbyte $
 * @author obitastar
 */

?>
<ul>
  <li id="welcome"><?php echo NAVI_WELCOME; ?></li>
  <li id="licenseaccept"><?php echo NAVI_LICENSE; ?></li>
  <li id="inspection"><?php echo NAVI_PREREQUISITES; ?></li>
  <li id="database"><?php echo NAVI_DATABASE_SETUP; ?></li>
<?php if ((isset($is_upgradable) && $is_upgradable) || (isset($is_upgrade) && $is_upgrade)) { ?>
  <li id="databaseupg"><?php echo NAVI_DATABASE_UPGRADE; ?></li>
<?php } ?>
  <li id="system"><?php echo NAVI_SYSTEM_SETUP; ?></li>
<?php if (isset($flag_check_config_keys) && $flag_check_config_keys) { ?>
  <li id="cfgcheck"><?php echo NAVI_CONFIG_CHECK; ?></li>
<?php } ?>
  <li id="store"><?php echo NAVI_STORE_SETUP; ?></li>
  <li id="admin"><?php echo NAVI_ADMIN_SETUP; ?></li>
  <li id="finish"><?php echo NAVI_FINISHED; ?></li>
</ul>