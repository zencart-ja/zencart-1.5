<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php 19537 2011-09-20 17:14:44Z drbyte $
 * @author obitastar
 */

define('HEADING_TITLE', '管理者活動ログマネージャー');
define('HEADING_SUB1', 'ログの表示/エクスポート');
define('HEADING_SUB2', 'ログの履歴削除');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'エクスポートファイルフォーマット:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'エクスポートファイル名:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','サーバーにファイルを保存しますか? (サーバーに保存をしない場合は、そのままブラウザ毎のファイル保存へと進みます。)');
define('TEXT_ACTIVITY_EXPORT_DEST','保存先: ');
define('TEXT_PROCESSED', ' 処理されました。');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'エクスポートが完了しました。 ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', '警告: エクスポートに失敗しました。保存先のファイルへの書き込むことができません。');

define('TEXT_INSTRUCTIONS','<u>説明</u><br />ここでは、管理者活動ログを、CSVファイルでインポートすることができます。<br />サイトへの不正アクセスや、不正に使用された場合などに、調査を行うため、ログデータを保存しておく必要があります。<br />これはPCIコンプライアンスの必要条件です。<br /><ol><li>エクスポートファイルフォーマットから、表示かエクスポートかを選択します。<li>エクスポートファイル名を入力します。<li>goをクリックします。(表示の場合は、ログが表示されます。)<li>ブラウザからの指示に従い、ファイルの表示や保存を選択して下さい。</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>管理者の活動ログをデータベースから削除します。<br />警告: この更新を行う前バックアップを必ず取ってください!</strong><br />管理者のアクティビティログは管理者の活動履歴を記録したものです。<br />ログは非常に多くなっていく為、速やかにきれいにしていく必要があります。<br />警告は60日で50,000件ほど溜まります<br /><span class="alert">注：PCI コンプライアンスのために、12ヵ月分の管理活動ログ履歴を保持することを要求されます。<br />ログデータを一掃する前に、上の『エクスポートCSV』から、管理活動ログ履歴を保存を行って下さい。</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">警告!: あなたは、データベースから重要な電算機処理監査記録を削除しようとしています。</span></strong><br />リセットに進む前に、データベースなどにログ履歴のバックアップ保存をしているか、まず確認しなければなりません。<br />ログデータを保存することに関しての法的責任を理解したうえで、ログの削除に進んでください。<br /><br />責任を理解したうえで、リセットボタンをクリックしログの削除を行います:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>完了</strong> 管理者活動ログの削除が完了しました。');

