<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_setup.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */
  define('TEXT_PAGE_HEADING', 'Zen Cart設定 - 管理者アカウント設定');
  define('SAVE_ADMIN_SETTINGS', '管理者設定を保存');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "管理者用のアカウントをここで作成します。管理者IDとパスワード、そしてパスワードを忘れてしまった際にパスワード再設定ページのURLを送信するメールアドレスを記入してください。内容を確認してから、<em>".SAVE_ADMIN_SETTINGS.'</em>をクリックしてください。');
  define('ADMIN_INFORMATION', '管理者情報');
  define('ADMIN_USERNAME', '管理者ID');
  define('ADMIN_USERNAME_INSTRUCTION', 'ユーザ名を記入してください。');
  define('ADMIN_PASS', '管理者パスワード');
  define('ADMIN_PASS_INSTRUCTION', 'パスワードを記入してください。');
  define('ADMIN_PASS_CONFIRM', '管理者パスワード（確認）');
  define('ADMIN_PASS_CONFIRM_INSTRUCTION', '確認のためもう一度パスワードを入力してください。');
  define('ADMIN_EMAIL', '管理者のメールアドレス');
  define('ADMIN_EMAIL_INSTRUCTION', 'メールアドレスを記入してください。');
  define('UPGRADE_DETECTION','最新版の検出');
  define('UPGRADE_INSTRUCTION_TITLE','ログインのたびにZen Cartの最新バージョンをチェックする');
  define('UPGRADE_INSTRUCTION_TEXT','※当機能は現在利用できません。');
