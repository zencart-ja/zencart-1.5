<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2011-05-04 14:50:06Z wilt $
 * @author obitastar
 */

// office use only
  define('OFFICE_FROM','差出人:');
  define('OFFICE_EMAIL','メールアドレス:');

  define('OFFICE_SENT_TO','宛て先:');
  define('OFFICE_EMAIL_TO','メールアドレス:');
  define('OFFICE_USE','会社での利用のみ:');
  define('OFFICE_LOGIN_NAME','ログイン名:');
  define('OFFICE_LOGIN_EMAIL','ログインメールアドレス:');
  define('OFFICE_LOGIN_PHONE','<strong>電話:</strong>');
  define('OFFICE_IP_ADDRESS','IPアドレス:');
  define('OFFICE_HOST_ADDRESS','ホスト名:');
  define('OFFICE_DATE_TIME','日付・時間:');

  define('EMAIL_GREET', '様');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'このメールアドレスは、あなたもしくはあなたのお客様からいただいたものです。このメールに心当たりがない方は、お手数ですが %s までお知らせください。');
  define('EMAIL_SPAM_DISCLAIMER','このメールは、US CAN-SPAM Law in effect 01/01/2004に準拠して送信されました。購読削除を希望される場合は、差出人アドレスにリクエストいただければ速やかに対処いたします。');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright &copy; 2012 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[ギフト券]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[クーポン券]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ご注文状況]');
  define('TEXT_UNSUBSCRIBE', "\n\nこのメールマガジンとショップからのお知らせを購読解除するには以下のリンクをクリック: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', '不可能');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', '管理者への警告 : 新しい管理者が追加されました。');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', '管理者への警告 : ショップに新しい管理者アカウント (%s) が追加されました。' . "\n" . '追加実行管理者は %s. です。' . "\n\n" . 'もしユーザーに心当たりがない場合は、すぐにサイトのセキュリティなどの確認を行って下さい。');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', '管理者への警告 : 管理者アカウントが削除されました。');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', '管理者への警告 : 管理者アカウント (%s) が削除されました。 ' . "\n" . '削除実行管理者： %s ' . "\n\n" . 'もしこの変更に心当たりがない場合は、すぐにサイトのセキュリティなどの確認を行って下さい。');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', '管理者への警告 : 管理ユーザーの詳細情報が変更されました。');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', '管理者への警告 : 管理者 (%s) のメールアドレスが (%s) から (%s) に変更されました。' . "\n" . '変更管理者： (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', '管理者への警告 : 管理者アカウント (%s) の管理者名が (%s) から (%s) に変更されました。' . "\n" . ' 管理者名変更管理者： (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', '管理者への警告 : 管理者アカウント (%s) の管理グループが (%s) から (%s) に変更されました。' . "\n" . '変更者： (%s)');