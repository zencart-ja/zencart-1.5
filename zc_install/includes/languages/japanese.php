<?php
/**
 * Main Japanese language file for installer
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: japanese.php 19537 2011-09-20 17:14:44Z drbyte $
 * @author obitastar
 */
/**
 * defining language components for the page
 */
  define('NAVI_WELCOME', 'ようこそ');
  define('NAVI_LICENSE', 'ライセンス規約');
  define('NAVI_PREREQUISITES', 'システム検査');
  define('NAVI_SYSTEM_SETUP', 'システム設定');
  define('NAVI_CONFIG_CHECK', 'config確認');
  define('NAVI_DATABASE_SETUP', 'データベース設定');
  define('NAVI_DATABASE_UPGRADE', 'データベースアップグレード');
  define('NAVI_STORE_SETUP', 'ショップ設定');
  define('NAVI_ADMIN_SETUP', '管理者設定');
  define('NAVI_FINISHED', '完了');

  define('YES', 'はい');
  define('NO', 'いいえ');
  define('REFRESH_BUTTON', '再チェック');
  define('OKAY', 'Okay');

  // Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="ja"');

  // charset for web pages and emails
  define('CHARSET', 'utf-8');

  // META TAG TITLE
  define('META_TAG_TITLE', (defined('TEXT_PAGE_HEADING') ? TEXT_PAGE_HEADING : 'Zen Cart&reg;インストーラ'));

  define('INSTALLATION_IN_PROGRESS','インストール進行中...');

  if (isset($_GET['main_page']) && ($_GET['main_page']== 'index' || $_GET['main_page']== 'license')) {
    define('TEXT_ERROR_WARNING', '注意: 継続する前に注意してほしい事項があります。');
  } else {
    define('TEXT_ERROR_WARNING', '<span class="errors"><strong>警告: 問題が見つかりました</strong></span>');
  }

  define('DB_ERROR_NOT_CONNECTED', 'インストールエラー: データベースへの接続に失敗しました');
	define('SHOULD_UPGRADE','アップグレードすることをお勧めします! ');
  define('MUST_UPGRADE','You need to upgrade this before installing Zen Cart&reg;');

  define('UPLOAD_SETTINGS','アップロードできるサイズの上限は以下のデータの中で最小の値に設定されます:.<br />
php.ini の<em>upload_max_filesize</em>: %s <br />
php.ini の<em>post_max_size</em>: %s <br />' . 
//'<em>Zen Cart&reg;</em>のアップロード設定: %s <br />' .
'Apacheの設定によってはファイルのアップロードができなかったりファイルサイズの上限が制限されたりすることがあります。
より詳しい説明はApacheの説明を参照してください。');

  define('TEXT_HELP_LINK', ' 詳細情報...');
  define('TEXT_CLOSE_WINDOW', '[ウィンドウを閉じる]');
  define('STORE_ADDRESS_DEFAULT_VALUE', 'ショップ名
  住所
  電話番号');

  define('ERROR_TEXT_ADMIN_CONFIGURE', '/admin/includes/configure.php が存在しません');
  define('ERROR_CODE_ADMIN_CONFIGURE', '2');

  define('ERROR_TEXT_STORE_CONFIGURE', '/includes/configure.php が存在しません');
  define('ERROR_CODE_STORE_CONFIGURE', '3');

  define('ERROR_TEXT_PHYSICAL_PATH_ISEMPTY', '物理パスが入力されていません');
  define('ERROR_CODE_PHYSICAL_PATH_ISEMPTY', '9');

  define('ERROR_TEXT_PHYSICAL_PATH_INCORRECT', '物理パスが不適切です');
  define('ERROR_CODE_PHYSICAL_PATH_INCORRECT', '10');

  define('ERROR_TEXT_VIRTUAL_HTTP_ISEMPTY', '仮想HTTPが入力されていません');
  define('ERROR_CODE_VIRTUAL_HTTP_ISEMPTY', '11');

  define('ERROR_TEXT_VIRTUAL_HTTPS_ISEMPTY', '仮想HTTPSが入力されていません');
  define('ERROR_CODE_VIRTUAL_HTTPS_ISEMPTY', '12');

  define('ERROR_TEXT_VIRTUAL_HTTPS_SERVER_ISEMPTY', '仮想HTTPS サーバが入力されていません');
  define('ERROR_CODE_VIRTUAL_HTTPS_SERVER_ISEMPTY', '13');

  define('ERROR_TEXT_DB_USERNAME_ISEMPTY', 'DBユーザ名が入力されていません');
  define('ERROR_CODE_DB_USERNAME_ISEMPTY', '16'); // 基本的に同じメッセージなので別のものを再利用

  define('ERROR_TEXT_DB_HOST_ISEMPTY', 'DBホストが入力されていません');
  define('ERROR_CODE_DB_HOST_ISEMPTY', '24');

  define('ERROR_TEXT_DB_NAME_ISEMPTY', 'DB名が入力されていません'); 
  define('ERROR_CODE_DB_NAME_ISEMPTY', '25');

  define('ERROR_TEXT_DB_SQL_NOTEXIST', 'SQLインストールファイルが存在しません');
  define('ERROR_CODE_DB_SQL_NOTEXIST', '26');

  define('ERROR_TEXT_DB_NOTSUPPORTED', 'データベースがサポートされていません');
  define('ERROR_CODE_DB_NOTSUPPORTED', '27');

  define('ERROR_TEXT_DB_CONNECTION_FAILED', 'データベースへの接続に失敗しました');
  define('ERROR_CODE_DB_CONNECTION_FAILED', '28');

  define('ERROR_TEXT_STORE_ZONE_NEEDS_SELECTION', 'Store Zone must be specified.');
  define('ERROR_CODE_STORE_ZONE_NEEDS_SELECTION', '29');

  define('ERROR_TEXT_DB_NOTEXIST', 'データベースが存在しません');
  define('ERROR_CODE_DB_NOTEXIST', '30');

  define('ERROR_TEXT_STORE_NAME_ISEMPTY', 'ショップ名が入力されていません');
  define('ERROR_CODE_STORE_NAME_ISEMPTY', '31');

  define('ERROR_TEXT_STORE_OWNER_ISEMPTY', 'ショップのオーナー名が入力されていません');
  define('ERROR_CODE_STORE_OWNER_ISEMPTY', '32');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_ISEMPTY', 'ショップオーナーのメールアドレスが入力されていません');
  define('ERROR_CODE_STORE_OWNER_EMAIL_ISEMPTY', '33');

  define('ERROR_TEXT_STORE_OWNER_EMAIL_NOTEMAIL', 'ショップオーナーのメールアドレスが無効です');
  define('ERROR_CODE_STORE_OWNER_EMAIL_NOTEMAIL', '34');

define('ERROR_TEXT_STORE_ADDRESS_ISEMPTY', 'ショップの住所が入力されていません');
define('ERROR_CODE_STORE_ADDRESS_ISEMPTY', '35');

define('ERROR_TEXT_DEMO_SQL_NOTEXIST', 'デモ商品のSQLファイルが存在しません');
define('ERROR_CODE_DEMO_SQL_NOTEXIST', '36');

define('ERROR_TEXT_ADMIN_USERNAME_ISEMPTY', '管理者IDが入力されていません');
define('ERROR_CODE_ADMIN_USERNAME_ISEMPTY', '46');

define('ERROR_TEXT_ADMIN_EMAIL_ISEMPTY', '管理者のメールアドレスが入力されていません');
define('ERROR_CODE_ADMIN_EMAIL_ISEMPTY', '47');

define('ERROR_TEXT_ADMIN_EMAIL_NOTEMAIL', '管理者のメールアドレスは有効なものではありません');
define('ERROR_CODE_ADMIN_EMAIL_NOTEMAIL', '48');

define('ERROR_TEXT_ADMIN_PASS_ISEMPTY', '管理者のパスワードが入力されていません');
define('ERROR_CODE_ADMIN_PASS_ISEMPTY', '49');

define('ERROR_TEXT_ADMIN_PASS_NOTEQUAL', 'パスワードが一致しません');
define('ERROR_CODE_ADMIN_PASS_NOTEQUAL', '50');

define('ERROR_TEXT_4_1_2', 'PHPのバージョンは4.1.2です');
define('ERROR_CODE_4_1_2', '1');
define('ERROR_TEXT_PHP_OLD_VERSION', 'PHPのバージョンがサポート外です');
define('ERROR_CODE_PHP_OLD_VERSION', '55');
define('ERROR_TEXT_PHP_VERSION', 'サポート外のPHPバージョンです');
define('ERROR_CODE_PHP_VERSION', '91');

define('ERROR_TEXT_ADMIN_CONFIGURE_WRITE', 'admin configure.php が書き込み可能ではありません');
define('ERROR_CODE_ADMIN_CONFIGURE_WRITE', '56');

define('ERROR_TEXT_STORE_CONFIGURE_WRITE', 'store configure.php が書き込み可能ではありません');
define('ERROR_CODE_STORE_CONFIGURE_WRITE', '57');

define('ERROR_TEXT_CACHE_DIR_ISEMPTY', 'Session/SQL Cache Directory entry が入力されていません');
define('ERROR_CODE_CACHE_DIR_ISEMPTY', '61');

define('ERROR_TEXT_CACHE_DIR_ISDIR', 'Session/SQL Cache Directory entry が存在しません');
define('ERROR_CODE_CACHE_DIR_ISDIR', '62');

define('ERROR_TEXT_CACHE_DIR_ISWRITEABLE', 'Session/SQL Cache Directory entry が書き込み可能ではありません');
define('ERROR_CODE_CACHE_DIR_ISWRITEABLE', '63');

define('ERROR_TEXT_ADMIN_PASS_INSECURE', 'Password not secure enough. Requires letters and numbers, and at least 7 characters.');
define('ERROR_CODE_ADMIN_PASS_INSECURE', '64');

define('ERROR_TEXT_REGISTER_GLOBALS_ON', 'Register GlobalsがONになっています');
define('ERROR_CODE_REGISTER_GLOBALS_ON', '69');

define('ERROR_TEXT_SAFE_MODE_ON', 'Safe ModeがONになっています');
define('ERROR_CODE_SAFE_MODE_ON', '70');

define('ERROR_TEXT_CACHE_CUSTOM_NEEDED','キャッシュフォルダはファイルキャッシングサポートを使用するために必要です');
define('ERROR_CODE_CACHE_CUSTOM_NEEDED', '71');

define('ERROR_TEXT_TABLE_RENAME_CONFIGUREPHP_FAILED','新しいプレフィクスでconfigure.php ファイルを更新できませんでした');
define('ERROR_CODE_TABLE_RENAME_CONFIGUREPHP_FAILED', '72');

define('ERROR_TEXT_TABLE_RENAME_INCOMPLETE','すべてのテーブルのリネームができませんでした');
define('ERROR_CODE_TABLE_RENAME_INCOMPLETE', '73');

define('ERROR_TEXT_SESSION_SAVE_PATH','PHP "session.save_path" が書き込み不可になっています');
define('ERROR_CODE_SESSION_SAVE_PATH','74');

define('ERROR_TEXT_MAGIC_QUOTES_RUNTIME','PHP "magic_quotes_runtime" がONになっています');
define('ERROR_CODE_MAGIC_QUOTES_RUNTIME','75');

define('ERROR_TEXT_DB_VER_UNKNOWN','データベースエンジンのバージョン情報が不明です');
define('ERROR_CODE_DB_VER_UNKNOWN','76');

define('ERROR_TEXT_UPLOADS_DISABLED','ファイルアップロードがOFFになっています');
define('ERROR_CODE_UPLOADS_DISABLED','77');

define('ERROR_TEXT_ADMIN_PWD_REQUIRED','アップグレードするには管理人用のパスワードが必要です');
define('ERROR_CODE_ADMIN_PWD_REQUIRED','78');

define('ERROR_TEXT_PHP_SESSION_SUPPORT','PHP Session Supportが必要です');
define('ERROR_CODE_PHP_SESSION_SUPPORT','80');

define('ERROR_TEXT_PHP_AS_CGI','Windows以外ではPHPをcgiとして使用することはお勧めしません');
define('ERROR_CODE_PHP_AS_CGI','81');

define('ERROR_TEXT_DISABLE_FUNCTIONS','必要なPHPの機能がOFFになっています');
define('ERROR_CODE_DISABLE_FUNCTIONS','82');

define('ERROR_TEXT_OPENSSL_WARN','OpenSSLはSSL (https://)を提供するために使われる方法のひとつです。<br /><br />以下のケースでは使用不可と表示されます。OpenSSLを使用したい場合は参考にしてください。 <br />(a) ウェブホストがSSLをサポートしていない<br />(b) ウェブサーバーにOpenSSLがインストールされていない(他のSSLサービスがインストールされている可能性がある)<br />(c) ウェブホストがSSL認証について詳細を知らないため、適切な設定をすることができない<br />(d) PHPがOpenSSLをサポートするように設定されていない。');
define('ERROR_CODE_OPENSSL_WARN','79');

define('ERROR_TEXT_DB_PREFIX_NODOTS','テーブルプレフィクスでは「 / 」「 \\ 」「 . 」を使用することができません。 ');
define('ERROR_CODE_DB_PREFIX_NODOTS','83');

define('ERROR_TEXT_PHP_SESSION_AUTOSTART','PHP Session.autostart をOFFにしてください。');
define('ERROR_CODE_PHP_SESSION_AUTOSTART','84');
define('ERROR_TEXT_PHP_SESSION_TRANS_SID','PHP Session.use_trans_sid をOFFにしてください。');
define('ERROR_CODE_PHP_SESSION_TRANS_SID','86');
define('ERROR_TEXT_DB_PRIVS','データベースユーザに使用権限が必要です');
define('ERROR_CODE_DB_PRIVS','87');
define('ERROR_TEXT_COULD_NOT_WRITE_CONFIGURE_FILES','/includes/configure.php に書き込みを行う際エラーが発生しました');
define('ERROR_CODE_COULD_NOT_WRITE_CONFIGURE_FILES','88');
define('ERROR_TEXT_GD_SUPPORT','GDサポートに関する詳細');
define('ERROR_CODE_GD_SUPPORT','89');

define('ERROR_TEXT_DB_MYSQL5','MySQL5.7以上のバージョンでのテストは不完全です');
define('ERROR_CODE_DB_MYSQL5','90');

define('ERROR_TEXT_OPEN_BASEDIR','Could have problems uploading files or doing backups');
define('ERROR_CODE_OPEN_BASEDIR','92');
define('ERROR_TEXT_CURL_SUPPORT','CURL support not detected or found disabled');
define('ERROR_CODE_CURL_SUPPORT','93');
define('ERROR_TEXT_CURL_NOT_COMPILED', 'CURL not compiled into PHP - notify server administrator');
define('ERROR_TEXT_CURL_PROBLEM_GENERAL', 'CURL problems detected: ');
define('ERROR_TEXT_CURL_SSL_PROBLEM', 'CURL requires SSL support. Please notify webmaster or hosting company.');
define('ERROR_CODE_CURL_SSL_PROBLEM','95');

define('ERROR_TEXT_MAGIC_QUOTES_SYBASE','PHP "magic_quotes_sybase" is active');
define('ERROR_CODE_MAGIC_QUOTES_SYBASE','94');

  $error_code ='';
if (isset($_GET['error_code'])) {
  $error_code = $_GET['error_code'];
  }

switch ($error_code) {
  case ('1'):
    define('POPUP_ERROR_HEADING', 'PHPバージョン4.1.2が確認されました');
    define('POPUP_ERROR_TEXT', 'PHPバージョン4.1.2のいくつかのリリースで上位グローバル配列に関するバグが報告されています。このバグによってZen Cartの管理画面が表示されない可能性がありますので、可能であればPHPをアップグレードしてください。<br /><br />PHP 4.3.2以降がZen Cartを実行するための最低ラインです。<br />PHP 4.4.9以降を使用することを強くお勧めします。');
    
  break;
  case ('2'):
    define('POPUP_ERROR_HEADING', '/admin/includes/configure.php が存在しません');
    define('POPUP_ERROR_TEXT', 'ファイル /admin/includes/configure.php が存在しません。空のファイルを作成するか、/admin/includes/dist-configure.php を configure.php へリネームすることでこのファイルを作成できます。作成後、read-write をマークするか、CHMOD 666 または CHMOD 777 とする必要があります。');
    
  break;
  case ('3'):
    define('POPUP_ERROR_HEADING', '/includes/configure.php が存在しません');
    define('POPUP_ERROR_TEXT', 'ファイル /includes/configure.php が存在しません。 空のファイルを作成するか、/includes/dist-configure.php を configure.php へリネームすることでこのファイルを作成できます。作成後、read-write をマークするか、CHMOD 666 または CHMOD 777 とする必要があります。');

  break;
  case ('4'):
    define('POPUP_ERROR_HEADING', '物理パス');
    define('POPUP_ERROR_TEXT', '物理パスはZen Cartのファイル群を置いているディレクトリのパスです。linux系のシステムでは、たとえばhtmlファイルは /var/www/html へ格納されます。もしZen Cartファイル群を \'store\' というディレクトリへ置いたなら、物理パスは /var/www/html/store となるでしょう。たいていはインストーラがこのディレクトリを正確に推測していると信頼してよいでしょう。');
    
  break;
  case ('5'):
    define('POPUP_ERROR_HEADING', '仮想HTTPパス');
    define('POPUP_ERROR_TEXT', 'サイト(ショップ)のURLです。もしサイトがドメインのrootにあるなら、 http://www.example.com または http://example.com となります。もし「store」というサブディレクトリに設置した場合は、http://www.example.com/store となります。');
    
  break;
  case ('6'):
    define('POPUP_ERROR_HEADING', '仮想HTTPSサーバ');
    define('POPUP_ERROR_TEXT', 'secure/SSLサーバへのウェブサーバアドレスです。このアドレスはSSL/Secureモードがサーバ上でどのように実行されているかによって変わります。');
    
  break;
  case ('7'):
    define('POPUP_ERROR_HEADING', '仮想HTTPSパス');
    define('POPUP_ERROR_TEXT', 'Zen Cartウェブサイトをsecure/SSLモードで閲覧するためにウェブブラウザに入力するアドレスのことです。');
    
  break;
  case ('8'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', 'サイトでSSL/Secure(HTTPS)を使用するかどうかを決めます。<br /><br />個人情報が入力されるあらゆるページ、例えばログイン、チェックアウト、アカウント詳細などをSSL/Secureモードにより保護することができます。さらに、それは管理者エリアに適用することもできます。<br /><br />SSLサーバ(HTTPの代わりにHTTPSの使用により表示された)にアクセスしなければなりません。<br /><br />SSLサーバがあるかどうか分からなければ、今はこの設定を \'No\' のままにしておいてください、そして自分のホスティングプロバイダへ確認してください。注:すべての設定は、configure.phpファイルを編集することで後から変更することができます。');
    
  break;
  case ('9'):
    define('POPUP_ERROR_HEADING', '物理パスが入力されませんでした');
    define('POPUP_ERROR_TEXT', '物理パスが入力されませんでした。有効な値を入力する必要があります。');

  break;
  case ('10'):
    define('POPUP_ERROR_HEADING', '物理パスは正しくありません');
    define('POPUP_ERROR_TEXT', '入力された物理パスは有効ではありません。修正して再度試してください。');
    
  break;
  case ('11'):
    define('POPUP_ERROR_HEADING', '仮想HTTPが入力されませんでした');
    define('POPUP_ERROR_TEXT', '仮想HTTPパスが入力されませんでした。有効な値を入力する必要があります。');
    
  break;
  case ('12'):
    define('POPUP_ERROR_HEADING', '仮想HTTPSが入力されませんでした');
    define('POPUP_ERROR_TEXT', 'SSLモード有効を選択した上で仮想HTTPSパスが入力されませんでした。有効な値を入力するか、SSLモードを無効にする必要があります。');
    
  break;
  case ('13'):
    define('POPUP_ERROR_HEADING', '仮想HTTPSサーバが入力されませんでした');
    define('POPUP_ERROR_TEXT', 'SSLモード有効を選択した上で仮想HTTPSサーバが入力されませんでした。有効な値を入力するか、SSLモードを無効にする必要があります。');
    
  break;
  case ('14'):
    define('POPUP_ERROR_HEADING', 'Database Character Set / Collation');
    define('POPUP_ERROR_TEXT', 'By default, Zen Cart&reg; uses the Latin1 character set / collation for the database and files. If you have a specific need to use UTF-8 instead of Latin1, you may choose UTF-8 here. <br /><strong>HOWEVER, TAKE NOTE</strong> that you will need to manually change ALL your language files to UTF8-without-BOM encoding if you are using any multibyte characters in your language files.');
    
  break;
  case ('15'):
    define('POPUP_ERROR_HEADING', 'データベースホスト');
    define('POPUP_ERROR_TEXT', 'データベースプログラムを実行するウェブサーバの名前です。ほとんどの場合、 \'localhost\' のままで大丈夫です。それ以外の場合は、それらのデータベースサーバのサーバ名をホスティングプロバイダへ尋ねる必要があるでしょう。');
    
  break;
  case ('16'):
    define('POPUP_ERROR_HEADING', 'データベースユーザ名');
    define('POPUP_ERROR_TEXT', 'すべてのデータベースはアクセスするためにユーザ名およびパスワードを必要とします。データベースユーザ名はホスティングプロバイダによって割り当てられているでしょう。その詳細についてはホスティングプロバイダに確認してください。');
    
  break;
  case ('17'):
    define('POPUP_ERROR_HEADING', 'データベースパスワード');
    define('POPUP_ERROR_TEXT', 'すべてのデータベースはアクセスするためにユーザ名およびパスワードを必要とします。データベースパスワードは、ホスティングプロバイダにより割り当てられているでしょう。その詳細についてはホスティングプロバイダに確認してください。');
    
  break;
  case ('18'):
    define('POPUP_ERROR_HEADING', 'データベース名');
    define('POPUP_ERROR_TEXT', 'これはZen Cartに使用するデータベース名です。もし何を入力するか分からない場合には、ホスティングプロバイダに詳細を確認してください。');
    
  break;
  case ('19'):
    define('POPUP_ERROR_HEADING', 'データベースプレフィクス');
    define('POPUP_ERROR_TEXT', 'Zen Cartは、使用されるテーブルの名前にプレフィクスを加えることができます。ホストから1つだけデータベースが提供されていて、データベースを使用する他のスクリプトもインストールしたい場合に、これは特に有用です。通常はデフォルトの設定のままにしておいたほうがいいでしょう。');
    
  break;
  case ('20'):
    define('POPUP_ERROR_HEADING', 'データベース作成');
    define('POPUP_ERROR_TEXT', 'この設定は、Zen Cart用のデータベースを作成することをインストーラが試みるかどうかを決めます。注:\'create\'の処理は、Zen Cartに必要なテーブルを追加することと全く関係ありません。それらは自動的に行われるでしょう。多くのホストでは \'create\' 権限を与えていないでしょうが、空のデータベースを作成する別の方法(例えばcPanel、phpMyAdmin)を提供しているでしょう。');
    
  break;
//  case ('21'):
//    define('POPUP_ERROR_HEADING', 'Database Connection');
//    define('POPUP_ERROR_TEXT', 'Persistent connections are a method of reducing the load on the database. You should consult your server host before setting this option.  Enabling "persistent connections" could cause your host to experience database problems if they haven\'t configured to handle it.<br /><br />Again, be sure to talk to your host before considering use of persistent connections.');
//
//  break;
//  case ('22'):
//    define('POPUP_ERROR_HEADING', 'Database Sessions');
//    define('POPUP_ERROR_TEXT', 'This detemines whether session information is stored in a file or in the database. While file-based sessions are slightly faster, <strong>database sessions are recommended</strong> for all online stores using SSL connections, for the sake of security.');
//
//  break;
  case ('23'):
    define('POPUP_ERROR_HEADING', 'Enable SSL');
    define('POPUP_ERROR_TEXT', 'Setting this to "true" simply turns on the switch that causes Zen Cart&reg; to ATTEMPT to operate certain pages in SSL mode.  Successful operation depends on you entering the correct HTTPS servername and path information. Your hosting provider should supply this information to you.<br />If you do not already have SSL support, you may have to purchase it. This includes a monthly charge for a dedicated IP address as well as an annual fee for the SSL certificate.');
    
  break;
  case ('24'):
    define('POPUP_ERROR_HEADING', 'データベースホスト名が入力されていません');
    define('POPUP_ERROR_TEXT', 'データベースホスト名が入力されていません。有効なデータベースサーバホスト名を入力してください。<br />これはデータベースプログラムを実行するウェブサーバの名前です。ほとんどの場合、\'localhost\'のままで大丈夫です。それ以外の場合は、データベースサーバのサーバ名をホスティングプロバイダに質問してください。');
  break;
  
  case ('25'):
    define('POPUP_ERROR_HEADING', 'データベース名が入力されていません');
    define('POPUP_ERROR_TEXT', 'Tデータベース名が入力されていません。Zen Cartに使用するデータベース名を入力してください。<br />これはZen Cartに使用するデータベースの名前です。もし何を入力するかわからないなら、ホスティングプロバイダに詳細を確認してください。');
    
  break;
  case ('26'):
    define('POPUP_ERROR_HEADING', 'SQLインストールファイルが存在しません');
    define('POPUP_ERROR_TEXT', 'SQLインストールファイルを見つけることができませんでした。\'zc_install\' ディレクトリに \'mysql_zencart.sql\' というような名前のファイルがあることを確認してください。');
    
  break;
  case ('27'):
    define('POPUP_ERROR_HEADING', 'データベースがサポートされていません');
    define('POPUP_ERROR_TEXT', '選択したデータベースタイプはインストールされているバージョンのPHPにサポートされていないようです。選択したデータベースタイプがサポートされているかホスティングプロバイダへ確認する必要があります。もし自分自身のサーバであれば、そのデータベースタイプをPHPにコンパイルして組み込んだかを確認してください。またモジュール/dllファイルはロードされている必要があります。');
    
  break;
  case ('28'):
    define('POPUP_ERROR_HEADING', 'データベースへの接続に失敗しました');
    define('POPUP_ERROR_TEXT', 'データベースへ接続できませんでした。これはいくつかの理由により起こりえます。<br /><br />DBホスト名が正しくないか、ユーザ名または<em>パスワード</em>が正しくないかもしれません。<br /><br />またデータベース名が正しくないのかもしれません(<strong>データベースが存在していますか? </strong> <strong>自分で作成しましたか? </strong> -- 注意: Zen Cartのインストーラはデータベースを作成しません。)。<br /><br />すべての入力項目が正しいか確認してください。');
    
  break;
  case ('29'):
    define('POPUP_ERROR_HEADING', 'Store Zone must be seleected');
    define('POPUP_ERROR_TEXT', 'Please select a zone from the Store Zones list. This information is used for tax and shipping calculations. You can always change it at a later date via Admin->Configuration->My Store.');
    
  break;
  case ('30'):
    define('POPUP_ERROR_HEADING', 'データベースが存在しません');
    define('POPUP_ERROR_TEXT', '指定されたデータベース名が見つかりませんでした。<br />(<strong>そのデータベースを作成しましたか? </strong> -- 注意: Zen Cartはデータベースを作成しません。)<br /><br />データベースの詳細を確認した後、指定したデータベースに関するデータを修正してください。<br /><br />ウェブホスティングの機能を使ってデータベースを作成する必要があるかもしれません。データベースを作成する場合は、ユーザ名とパスワードそしてデータベース名をメモしておくと、インストールする際に便利です。');
    
  break;
  case ('31'):
    define('POPUP_ERROR_HEADING', 'ショップ名が入力されませんでした');
    define('POPUP_ERROR_TEXT', 'ショップ名を指定してください。');
    
  break;
  case ('32'):
    define('POPUP_ERROR_HEADING', 'ショップオーナーの名前が入力されませんでした');
    define('POPUP_ERROR_TEXT', 'ショップオーナーの名前を入力してください。この情報は \'Contact Us\' ページ、\'Welcome\' メール、および店の色々な箇所に表示されます。');
    
  break;
  case ('33'):
    define('POPUP_ERROR_HEADING', 'ショップのメールアドレスが入力されませんでした');
    define('POPUP_ERROR_TEXT', 'ショップのメールアドレスを入力してください。これは店から発送されるメール内で連絡先として使用されるアドレスです。表示するように手動でカスタマイズしない限り、この情報はどのページにも表示されることはありません。');
    
  break;
  case ('34'):
    define('POPUP_ERROR_HEADING', 'ショップのメールアドレスが有効ではありません');
    define('POPUP_ERROR_TEXT', '有効なメールアドレスを入力してください。');
    
  break;
  case ('35'):
    define('POPUP_ERROR_HEADING', 'ショップの住所が入力されませんでした');
    define('POPUP_ERROR_TEXT', 'ショップの住所を入力してください。これはお問い合わせページや(必要に応じて非表示にすることもできます)、納品書/内容明細票に表示されます。また、チェックアウトで顧客がチェックやマネーオーダーでの購入を選択した際にもこの情報が表示されるでしょう。');
    
  break;
  case ('36'):
    define('POPUP_ERROR_HEADING', 'デモ商品SQLファイルが存在しません');
    define('POPUP_ERROR_TEXT', 'Zen Cartデモ商品データをインストールするためのSQLファイルが見つかりません。/zc_install/demo/xxxxxxx_demo.sql ファイルが存在するかチェックしてください。(xxxxxxx = データベースタイプ)');
    
  break;
  case ('37'):
    define('POPUP_ERROR_HEADING', 'ショップ名');
    define('POPUP_ERROR_TEXT', 'ショップの名称です。これはこのシステムによって送られるメールまたはブラウザのタイトルの中で使用されます。');
    
  break;
  case ('38'):
    define('POPUP_ERROR_HEADING', 'ショップオーナーの名前');
    define('POPUP_ERROR_TEXT', 'ショップオーナーの名前はこのシステムによって送られるメールの中で使用されます。');
    
  break;
  case ('39'):
    define('POPUP_ERROR_HEADING', 'ショップオーナーのメールアドレス');
    define('POPUP_ERROR_TEXT', 'ショップが連絡を受けることができる主要なメールアドレスです。システムによって送られたほとんどのメールや、お問い合わせページに使用されます。');
    
  break;
  case ('40'):
    define('POPUP_ERROR_HEADING', '国');
    define('POPUP_ERROR_TEXT', 'ショップが拠点を置く国です。税および発送のオプションが正しく働くために、これを正確に設定することが重要です。さらにこれは納品書における宛名のレイアウトなどを決定します。');
    
  break;
  case ('41'):
    define('POPUP_ERROR_HEADING', 'ゾーン');
    define('POPUP_ERROR_TEXT', 'ショップが拠点を置く国の地理的な区分です。例えばアメリカ合衆国の州、日本の都道府県です。');
    
  break;
  case ('42'):
    define('POPUP_ERROR_HEADING', 'ショップの住所');
    define('POPUP_ERROR_TEXT', 'ショップの住所です。納品書や注文確認に使用されます。');
    
  break;
  case ('43'):
    define('POPUP_ERROR_HEADING', 'デフォルトの言語');
    define('POPUP_ERROR_TEXT', 'ショップで使うデフォルトの言語です。もし正確な言語パックがロードされれば、Zen Cartはそのまま多言語をサポートします。Zen Cartは英語パックがデフォルトになっています。その他の言語に関しては、Zen Cartコミュニティによって翻訳された言語パックが www.zen-cart.com のダウンロードコーナーに用意されています。');
    
  break;
  case ('44'):
    define('POPUP_ERROR_HEADING', 'デフォルトの通貨');
    define('POPUP_ERROR_TEXT', 'ショップで扱うデフォルトの通貨を選択してください。もし希望するものがリストになければ、インストール完了後に管理者エリアで簡単に変更できます。');
    
  break;
  case ('45'):
    define('POPUP_ERROR_HEADING', 'デモ商品インストール');
    define('POPUP_ERROR_TEXT', 'Zen Cartの様々な特徴を試してみるために、デモ商品をデータベースにインストールするかどうか選択してください。');
    
  break;
  case ('46'):
    define('POPUP_ERROR_HEADING', '管理者IDが入力されませんでした');
    define('POPUP_ERROR_TEXT', 'インストール完了後に管理者エリアへログインするための管理者IDを指定する必要があります。');
    
  break;
  case ('47'):
    define('POPUP_ERROR_HEADING', '管理者のメールアドレスが入力されませんでした');
    define('POPUP_ERROR_TEXT', '管理者のメールアドレスは、パスワードを忘れパスワード再発行を行なう際に使用されます。');
    
  break;
  case ('48'):
    define('POPUP_ERROR_HEADING', '管理者のメールアドレスは有効なものではありません');
    define('POPUP_ERROR_TEXT', '有効なメールアドレスを入力してください');
    
  break;
  case ('49'):
    define('POPUP_ERROR_HEADING', '管理者パスワードが入力されませんでした');
    define('POPUP_ERROR_TEXT', 'セキュリティのために、パスワードは空白にはできません。');
    
  break;
  case ('50'):
    define('POPUP_ERROR_HEADING', 'パスワードが一致しません');
    define('POPUP_ERROR_TEXT', '管理者パスワードおよび確認を再入力してください。');
    
  break;
  case ('51'):
    define('POPUP_ERROR_HEADING', '管理者ID');
    define('POPUP_ERROR_TEXT', 'インストール完了後に管理者エリアへログインするための管理者IDをここで指定する必要があります。');
    
  break;
  case ('52'):
    define('POPUP_ERROR_HEADING', '管理者のメールアドレス');
    define('POPUP_ERROR_TEXT', '管理者のメールアドレスは、パスワードを忘れパスワード再設定を行なう際に使用されます。');
    
  break;
  case ('53'):
    define('POPUP_ERROR_HEADING', '管理者パスワード');
    define('POPUP_ERROR_TEXT', '管理者パスワードは管理者エリアへのアクセスを与える安全なパスワードです。');
    
  break;
  case ('54'):
    define('POPUP_ERROR_HEADING', '管理者パスワード(確認)');
    define('POPUP_ERROR_TEXT', '当然、一致するパスワードを入力する必要があります。');
    
  break;
  case ('55'):
    define('POPUP_ERROR_HEADING', 'PHPのバージョンがサポート外');
    define('POPUP_ERROR_TEXT', 'サーバ上で動いているバージョンのPHPはZen Cartのサポート外です。<br /><br />PHP 5.3.14が動作環境の最低条件です。<br />できればPHP 5.3.3以上にアップグレードすることをお勧めします。<br /><br />If you are trying to use older PHP versions, note that using older releases of PHP may result in the admin section of Zen Cart&reg; not being accessible, might leave your site vulnerable to hacking, and may not support some of the PHP Session code that handles keeping individual customer logins unique and separate from other customers. You are advised to upgrade your PHP version.');
    
  break;
  case ('56'):
    define('POPUP_ERROR_HEADING', 'admin configure.php が書き込み不可');
    define('POPUP_ERROR_TEXT', 'ファイル admin/includes/configure.php が書き込み可能になっていません。UnixやLinuxシステムを使用されているのであれば、Zen Cartのインストールが完了するまでCHMODでファイルの権限を777または666に変更してください。たいていのFTPプログラムでこの変更を行うことができます(右クリックやファイルの属性を編集するなど)。<br /><br />Windowsデスクトップシステムならば、単にread/writeに設定してください。<br /><br />Windowsサーバー、特にIIS上では、このファイルを右クリックして、セキュリティーを選択し、「インターネットゲストアカウント」あるいはIUSR_xxxxxxxユーザが読み書きできるように設定してください。<br /><br />インストールが完了したら、このファイルを読み専用に戻してください(CHMOD 644あるいは444、Windowsなら「write」を取り消すか、「read-only」をチェックしてください。)。');
    
  break;
  case ('57'):
    define('POPUP_ERROR_HEADING', 'Store configure.php が書き込み不可');
    define('POPUP_ERROR_TEXT', 'ファイル includes/configure.php が書き込み可能になっていません。UnixやLinuxシステムを使用されているのであれば、Zen Cartのインストールが完了するまでCHMODでファイルの権限を777または666に変更してください。たいていのFTPプログラムでこの変更を行うことができます(右クリックやファイルの属性を編集するなど)。<br /><br />Windowsデスクトップシステムならば、単にread/writeに設定してください。<br /><br />Windowsサーバー、特にIIS上では、このファイルを右クリックして、セキュリティーを選択し、「インターネットゲストアカウント」あるいはIUSR_xxxxxxxユーザが読み書きできるように設定してください。<br /><br />インストールが完了したら、このファイルを読み専用に戻してください(CHMOD 644あるいは444、Windowsなら「write」を取り消すか、「read-only」をチェックしてください。)。');
    
  break;
  case ('58'):
    define('POPUP_ERROR_HEADING', 'データベーステーブルプレフィクス');
    define('POPUP_ERROR_TEXT', 'Zen Cartは、使用されるテーブルの名前にプレフィクスを加えることができます。データベースが一つしか使えない場合に、データベースを使用するほかのプログラムもインストールしたいなら、プレフィクスでテーブルを区別することができます。通常はデフォルトの設定のままで結構です。');
    
  break;
  case ('59'):
    define('POPUP_ERROR_HEADING', 'SQLキャッシュディレクトリ');
    define('POPUP_ERROR_TEXT', 'SQLクエリは、データベースの中に、あるいはサーバのハードディスク上のファイルにキャッシュすることができます。 サーバのハードディスク上のファイルへのSQLキャッシュを選択したならば、キャッシュデータを保存するためのディレクトリを指定してください。<br /><br />標準的なZen Cartのインストールには \'cache\' フォルダが含まれています。ウェブサーバ（例えばapache）がこのディレクトリにアクセスできるように、このフォルダを読み書き可能にする必要があります。<br /><br />指定されたディレクトリがあることを確認し、ウェブサーバによって書き込み可能であるか(CHMOD 777または少なくとも666を推奨)を確かめてください。');
    
  break;
  case ('60'):
    define('POPUP_ERROR_HEADING', 'SQLキャッシュ方法');
    define('POPUP_ERROR_TEXT', 'SQLクエリによってはキャッシュすることができます。キャッシュされた場合には、より速く処理されます。ここではSQLクエリをキャッシュするために、どの方法を使用するか指定ことができます。<br /><br /><strong>なし</strong>. SQLクエリは全くキャッシュされません。もし商品やカテゴリがとても少ないなら、これが最適です。<br /><br /><strong>データベース</strong>. SQLクエリがデータベーステーブルにキャッシュされます。これは、中規模の商品/カテゴリ数のサイトで速度アップをもたらすでしょう。<br /><br /><strong>ファイル</strong>. SQLクエリがサーバのハードディスクにキャッシュされます。これを機能させるためには、ウェブサーバが書き込み可能なクエリをキャッシュするディレクトリを確認する必要があります。この方法は大規模な商品/カテゴリ数のサイトに適しているでしょう。');
    
  break;
  case ('61'):
    define('POPUP_ERROR_HEADING', 'セッション/SQL キャッシュディレクトリが未指定');
    define('POPUP_ERROR_TEXT', 'セッション/SQLクエリのキャッシングにファイルを使用する場合、ウェブサーバ上の有効なディレクトリを指定する必要があります。またウェブサーバがそのディレクトリへの書き込み権限を持っていることを確認してください。');
    
  break;
  case ('62'):
    define('POPUP_ERROR_HEADING', 'セッション/SQL キャッシュディレクトリが見つからない');
    define('POPUP_ERROR_TEXT', 'セッション/SQLクエリのキャッシングにファイルを使用する場合、ウェブサーバ上の有効なディレクトリが存在する必要があります。またウェブサーバがそのディレクトリへの書き込み権限を持っていることを確認してください。');
    
  break;
  case ('63'):
    define('POPUP_ERROR_HEADING', 'セッション/SQL キャッシュディレクトリが書き込み不可');
    define('POPUP_ERROR_TEXT', 'セッション/SQLクエリのキャッシングにファイルを使用する場合、ウェブサーバ上の有効なディレクトリを指定する必要があります。またウェブサーバがそのディレクトリへの書き込み権限を持っていることを確認してください。Linux/UnixにおいてはCHMOD 666または777、WindowsサーバにおいてはRead/Writeを適用してください(IIS上では、インターネットゲストアカウントに適用する必要があります)。');
  break;

  case ('64'):
    define('POPUP_ERROR_HEADING', '同じサーバ上にインストールしているphpBBフォーラムとリンクさせますか? ');
    define('POPUP_ERROR_TEXT', 'Zen Cartストアを、既に設置してあるphpBBフォーラムとリンクするには、はいを選択してください。');
    
  break;
//  case ('65'):
//    define('POPUP_ERROR_HEADING', 'phpBBデータベースプレフィクス');
//    define('POPUP_ERROR_TEXT', 'phpBBテーブル用のプレフィクスを指定してください。通常は \'phpBB_\' です。');
//    
//  break;
//  case ('66'):
//    define('POPUP_ERROR_HEADING', 'phpBBデータベース名 ');
//    define('POPUP_ERROR_TEXT', 'phpBBテーブルがあるデータベース名を指定してください。');
//  break;
//  case ('67'):
//    define('POPUP_ERROR_HEADING', 'phpBBディレクトリ');
//    define('POPUP_ERROR_TEXT', 'phpBBスクリプトファイルがインストールされているディレクトリへの完全なパスを指定してください。こうすることで、Zen CartショップのphpBBリンクをクリックした際に、正しいページが表示されるようになります。<br /><br />ここに入力するパスは、サーバの"root"からの相対パスです。もしphpBBが<strong>/home/users/username/public_html/phpbb </strong>に設置してあるなら、<strong>/home/users/username/public_html/phpbb/ </strong>と入力してください。もしサブフォルダにあるなら、そのパスを指定してください。<br /><br />そのフォルダにある「<em>config.php</em>」が指定されます。');
//  break;
//  case ('68'):
//    define('POPUP_ERROR_HEADING', 'phpBBディレクトリ');
//    define('POPUP_ERROR_TEXT', '指定したディレクトリにphpBB configureファイルがありませんでした。この自動設定を使用するには、phpBBが既にインストールされている必要があります。インストールされていないなら、phpBBの自動設定を指定せず、Zen CartとphpBBのインストール後に手動で設定する必要があります。<br /><br />ここに入力されたパスは、サーバの"root"からの相対パスです。phpBBが <strong>/home/users/username/public_html/phpbb </strong>に設置してあるなら、<strong>/home/users/username/public_html/phpbb/ </strong>を入力する必要があります。もしサブフォルダにあるなら、そのパスを指定してください。<br /><br />そのフォルダにある「<em>config.php</em>」が指定されます。');
//  break;
  case ('69'):
    define('POPUP_ERROR_HEADING', 'Register Globals');
    define('POPUP_ERROR_TEXT', 'register_globalsはセキュリティ上重大な問題を引き起こす可能性があるため、Zen Cartは、register_globalsの設定をOffにしなければ動作しません(v1.3.0.2-l10n-jp-3より)。<br/>Zen Cartのインストールディレクトリに.htaccessファイルが正しくアップロードされているのにこのメッセージが表示されている場合、ご使用中のサーバーでは.htaccessでregister_globalsの設定を変更できないことを意味しています。<br/>この問題を解決するためには、次のうち2つのどちらかの対応が必要です。<br/><br/><br/>1. サーバーの設定を変更する<br/>2. register_globalsがOffで運用可能なサーバーに再インストールする');
  break;
  case ('70'):
    define('POPUP_ERROR_HEADING', 'Safe Mode is On');
    define('POPUP_ERROR_TEXT', '総合的e-CommerceアプリケーションであるZen Cartは、Safe Modeで稼働しているサーバではうまく機能しません。<br /><br />e-Commerceシステムを実行することは、多数の先進的なサービスを必要とし、廉価な「共有」ホスティングサービスでは動作が制限されることがよくあります。ウェブスペースを「Safe Mode」に設定してしまうと、オンラインショップを万全な状態で運営することができなくなります。php.iniファイル上で「SAFE_MODE=OFF」に設定してください。この変更にはホスティング会社の手助けが必要になる場合があります。');
  break;
  case ('71'):
    define('POPUP_ERROR_HEADING', 'ファイルベースキャッシングサポートのためにキャッシュフォルダが必要です');
    define('POPUP_ERROR_TEXT', 'Zen CartのファイルベースSQLキャッシュサポートを使用するなら、ウェブスペースのキャッシュフォルダの権限を適切に設定する必要があります。<br /><br />キャッシュフォルダを使用したくなければ、「データベースキャッシング」または「キャッシュ不使用」を選択することもできます。この場合、セッショントラッカーが同様にファイルキャッシュを使用するので「セッションを保存する」も使用しない方がいいかもしれません。<br /><br />キャッシュフォルダを適切にセットアップするために、FTPプログラムまたはシェル・アクセスを使用し、フォルダのパーミッションをCHMOD 666または777にしてください。<br /><br />明確に、ウェブサーバのユーザID（例えば：\'apache\' や \'www-user\' またはWindowsでは \'IUSR_xxxxxxxxx\'）は、キャッシュフォルダに対して \'read-write-delete\' のすべての権限をもっていなければなりません。');
  break;
  case ('72'):
    define('POPUP_ERROR_HEADING', 'ERROR: すべてのconfigure.phpファイルを新しいプレフィクスで更新できませんでした');
    define('POPUP_ERROR_TEXT', 'テーブル名を変更した後、configure.phpファイルの更新中にエラーが発生しました。/includes/configure.php と /admin/includes/configure.php ファイルを手動で編集し、「DB_PREFIX」がZen Cartテーブルを正しく指定するように書き直してください。');
  break;
  case ('73'):
    define('POPUP_ERROR_HEADING', 'ERROR: すべてのテーブルに新しいテーブルプレフィクスを適用できませんでした');
    define('POPUP_ERROR_TEXT', 'データベーステーブルを新しいテーブルプレフィクスを付加して改名を試みている間に、エラーが発生しました。データベーステーブル名を手作業で調査する必要があるでしょう。最悪の場合、バックアップから復旧する必要があるかもしれません。');
  break;
  case ('74'):
    define('POPUP_ERROR_HEADING', '注意: PHPの「session.save_path」が書込み禁止');
    define('POPUP_ERROR_TEXT', '<strong>これは単なる注意書きです。</strong>PHPのsession.save_path設定で指定されたパスへの書き込み権限がありません。<br /><br />これはつまりこのパス設定を暫定的なファイルの保存場所として使うことができないことを意味します。代わりに、下に表示された「推奨するキャッシュのパス」を使ってください。<br /><br /><br />あるいは、もしこのパスが確認不可となった場合には、サーバのphp.iniファイルでの設定で許可されてない可能性があります。ただし神経質になる必要はありません。これは単なる注意書きだと考えてください。どうしても気になるなら、ウェブホスト側に相談してください。');
  break;
  case ('75'):
    define('POPUP_ERROR_HEADING', '注意: PHPの「magic_quotes_runtime」がONになっている');
    define('POPUP_ERROR_TEXT', '「magic_quotes_runtime」はOFFになっていることが好ましいです。ONになっていると、予期しない1064 SQLエラーが発生したり、コードの実行に支障をきたすことがあります。<br /><br />もしサーバ全体で「magic_quotes_runtime」をOFFにできないなら、.htaccessファイルかphp.iniでOFFにしてください。設定の仕方がわからない場合には、ウェブホスト側に相談してください。');
  break;
  case ('76'):
    define('POPUP_ERROR_HEADING', 'データベースエンジンのバージョンが不明');
    define('POPUP_ERROR_TEXT', '指定されたデータベースエンジンのバージョンが不明です。<br /><br />これは必ずしも重大な問題「ではありません」。実際のところ、現段階ではバージョンが確認できないことがしばしばみられます。<br /><br />このデータが不明となっていたとしても、インストールを継続して通常は問題ありません。');
  break;
  case ('77'):
    define('POPUP_ERROR_HEADING', 'ファイルアップロードがOFF');
    define('POPUP_ERROR_TEXT', 'ファイルアップロードが許可されていません。アップロードを許可するには、php.iniファイルで<em><strong>file_uploads = on</strong></em>と指定してください。');
  break;
  case ('78'):
    define('POPUP_ERROR_HEADING', 'アップグレードを実行するには管理人のパスワードが必要');
    define('POPUP_ERROR_TEXT', 'データベースに変更を加えるには管理人のユーザ名とパスワードが必要です。<br /><br />Zen Cartの管理人ユーザ名とパスワードを正しく入力してください。');
  break;
  case ('79'):
    define('POPUP_ERROR_TEXT','OpenSSLはサイトにSSL (https://)を提供するために使われる方法の一つです。<br /><br />使用不可と表示された場合、考えられる理由として以下のものが考えられます: <br />(a) ウェブホストがSSLをサポートしていない<br />(b) ウェブサーバーにOpenSSLがインストールされていない(他のSSLサービスがインストールされている可能性がある)<br />(c) ウェブホストがSSL認証について詳細を知らないため、適切な設定をすることができない<br />(d) PHPがOpenSSLをサポートするように設定されていない。<br /><br />いずれの原因にせよ、ウェブページの暗号化(SSL)が必要なら、ウェブホスティングのプロバイダに相談してください。');
    define('POPUP_ERROR_HEADING','OpenSSL情報');
  break;
  case ('80'):
    define('POPUP_ERROR_HEADING', 'PHPセッションサポートが必要');
    define('POPUP_ERROR_TEXT', 'PHPセッションサポートをONにしてください。以下のモジュールをインストールすることで解決する場合があります: php4-session ');
  break;
  case ('81'):
    define('POPUP_ERROR_HEADING', 'Windows以外ではPHPをcgiとして使用することを避ける');
    define('POPUP_ERROR_TEXT', 'Linux/Unixサーバ上でPHPをcgiとして実行させると、様々な問題が起こる可能性があります。<br /><br />Windowsサーバなら、PHPは常にcgiモジュールとして実行されるので、Windowsサーバを使っているなら、この警告を無視してください。');
  break;
  case ('82'):
    define('POPUP_ERROR_HEADING', ERROR_TEXT_DISABLE_FUNCTIONS);
    define('POPUP_ERROR_TEXT', 'php.iniファイルで以下の機能のいずれかがOFFになっています: <br /><ul><li>set_time_limit</li><li>exec</li></ul>トラフィックが膨大なサーバーでは安全性のため、この機能をOFFにしているものがありますが、e-Commerceシステムを動作させるには理想的ではなく、パフォーマンスに影響が出る可能性があります。<br /><br />ホスティングプロバイダーに、これらの機能を開放したサーバを提供してもらうように交渉することをお勧めします。');
  break;
  case ('83'):
    define('POPUP_ERROR_HEADING','データベースのテーブルプレフィクスに未許可の文字が含まれている');
    define('POPUP_ERROR_TEXT','データベースのテーブルプレフィクスには以下の文字を含むことができません: <br />
&nbsp;&nbsp; / または \\ または . <br /><br />プレフィクスの指定をやり直してください。例えば簡単に「zen_」のようなものをお勧めします。');
  break;
  case ('84'):
    define('POPUP_ERROR_HEADING','PHPのSession.autostartがONになっている。');
    define('POPUP_ERROR_TEXT','php.iniファイルにあるsession.auto_start設定がONになっています。<br /><br />Zen Cartではセッションの設定が完了した時点でセッションを開始するデザインになっているため、この設定ではセッションの処理に不都合が起きる可能性があります。セッションを自動的に開始させる設定だと、サーバによっては問題になります。<br /><br />もしこれをOFFにしたいなら、Zen Cartのルートディレクトリ(index.phpと同じフォルダ)にある.htaccessファイルに次のコマンドを書き込んでください: <br /><br /><code>php_value session.auto_start 0</code>');
  break;
  case ('85'):
    define('POPUP_ERROR_HEADING','データベースアップグレード用のSQLの記述が不完全');
    define('POPUP_ERROR_TEXT','データベースをアップグレードする際に、SQLの記述のうちのいくつかが実行されませんでした。これはデータベースに重複したエントリがあるか、あるべきはずのコラムがないなどの条件が合わなかったことによるものです。<br /><br />最もよく見られる原因として、Zen Cartのデータベースに変更を加えるようなコントリビューション/ アドオンなどをインストールしたことが挙げられます。<br /><br />仮にアップグレードの際にエラーが発生しても、ショップの運営には全く影響を与えないこともありますが、念のためにエラーの内容を確認することをお勧めします。<br /><br />確認するには、「upgrade_exceptions」テーブルの内容をチェックすることから始めてください。');
  break;
  case ('86'):
    define('POPUP_ERROR_HEADING','PHPのSession.use_trans_sidがONになっている');
    define('POPUP_ERROR_TEXT','php.iniファイルでsession.use_trans_sidがONに設定されています。<br /><br />このままだとセッションの処理に問題が出るばかりか、安全性にも支障をきたす可能性があります。<br /><br /><a href="http://www.olate.com/articles/252">http://www.olate.com/articles/252</a>を参考にして.htaccessのパラメータを変更するか、php.iniファイルでOFFにしてください。<br /><br />安全性に関しての情報は、次の場所を参照してください: <a href="http://shh.thathost.com/secadv/2003-05-11-php.txt">http://shh.thathost.com/secadv/2003-05-11-php.txt</a>。');
  break;
  case ('87'):
    define('POPUP_ERROR_HEADING','データベースユーザの権限が必要');
    define('POPUP_ERROR_TEXT','Zen Cartを運営するには以下のようなデータベースレベルでの権限が必要です: <ul><li>ALL PRIVILEGES<br /><em>or</em></li><li>SELECT</li><li>INSERT</li><li>UPDATE</li><li>DELETE</li><li>CREATE</li><li>ALTER</li><li>INDEX</li><li>DROP</li></ul>日常の操作には「CREATE」と「DROP」の権限は必要ありませんが、インストールやアップグレードそしてSQLパッチなどの際に必要になります。');
  break;
  case ('88'):
    define('POPUP_ERROR_HEADING','/includes/configure.phpへの書き込みに失敗');
    define('POPUP_ERROR_TEXT','指定した設定をconfigure.phpファイルに保存する際、Zen Cartインストーラが書き込みに失敗しました。以下のconfigure.phpファイルに対してウェブサーバが書き込みの権限をもっているか確認してください。<br /><br />- /includes/configure.php<br />- /admin/includes/configure.php<br /><br />そしてこれらのファイルを書き換えるためのディスク容量が不足していないかもチェックする必要があるかもしれません。<br /><br />エラーが起きたときに、これらのファイルサイズが0-bytesだったとしたら、ディスク容量の問題である可能性が高くなります。<br /><br />インストールが完了するまで、Unix/LinuxホスティングではCHMOD 777にしておくことが理想的です。そしてインストールが完了した時点で、644か444に設定してください。<br /><br />Windowsの場合には、インストールを始める前に、これらのファイルを右クリックして、「プロパティ」を選択し、「セキュリティ」タブをクリックします。「新規」をクリックして「全員」を選択して、読み書きの権限を与えます。そしてインストールが完了したら、読み専用に設定しなおします。');
  break;
  case ('89'):
    define('POPUP_ERROR_HEADING','GDサポートに関する詳細');
    define('POPUP_ERROR_TEXT','画像処理のために、Zen CartはPHPのGDサポートを使用します(GDが使用可能な場合)。バージョン2.0以上のものをお勧めします。<br /><br />もしGDサポートがPHPに入っていないなら、ホスティング会社に頼んでみましょう。');
  break;
  case ('90'):
    define('POPUP_ERROR_HEADING','MySQL 5.7 (and higher) not fully supported in v1.5.x');
    define('POPUP_ERROR_TEXT','NOTE: Zen Cart&reg; v2.0 and newer support MySQL 5 and PHP 5 properly.<br />But, you are presently installing v1.5.x.<br /><br />While many efforts have been spent on ensuring that database queries in Zen Cart&reg; v1.5.x are compatible with MySQL 5 releases, the newer v2.x versions are more thoroughly tested.<br /><br />You are welcome to proceed with installation; however, please note that for full compatibility you should use the newer version of Zen Cart.');
  break;
  case ('91'):
    define('POPUP_ERROR_HEADING','PHPバージョンの警告');
    define('POPUP_ERROR_TEXT','Zen CartはPHPバージョン5.3.14以上で実行されるようにデザインされています。<br /><br />Zen Cartで使われているPHPファンクション(主に認証とセッション処理関連)は噴くいPHPには全く存在しないか、あるいはバグがあります。<br /><br />このサーバでZen Cartを運営するなら、PHPのバージョンをアップグレードすることを強くお勧めします。');
  break;
  case ('92'):
    define('POPUP_ERROR_HEADING','open_basedir restriction may cause problems');
    define('POPUP_ERROR_TEXT','Your PHP is configured in such a way that prevents you from running scripts outside a specified "basedir" folder. Yet, your website files appear to be kept in a folder outside of the allowed "basedir" area.<br /><br />Among other things, you could have problems uploading files or doing backups.<br /><br />You should talk to your web host to change or remove this restriction.');
  break;
  case ('93'):
    define('POPUP_ERROR_HEADING','cURL support not detected');
    define('POPUP_ERROR_TEXT','Some payment and shipping modules require cURL in order to talk to an external server to request real-time quotes or payment authorizations. <br /><br />If you intend to use the PayPal Express Checkout or Website Payments Pro modules, or Authorize.net AIM, you *need* CURL support.<br /><br />It appears that your server may not have cURL support configured or activated for your account. If you need a 3rd-party tool that uses cURL, you will need to talk to your web host to have them install cURL support on your server.<br /><br />More information on CURL can be found at the <a href="http://curl.haxx.se" target="_blank">CURL website</a>');
  break;
  case ('94'):
    define('POPUP_ERROR_HEADING', 'NOTE: PHP "magic_quotes_sybase" is active');
    define('POPUP_ERROR_TEXT', 'It is best to have "magic_quotes_sybase" disabled. When enabled, it can cause unexpected 1064 SQL errors, and other code-execution problems.<br /><br />If you cannot disable it for the whole server, it may be possible to disable via .htaccess or your own php.ini file in your private webspace.  Talk to your hosting company for assistance.');
  break;
  case ('95'):
    define('POPUP_ERROR_HEADING','CURL requires SSL support. Please notify webmaster or hosting company.');
    define('POPUP_ERROR_TEXT','Zen Cart&reg; uses CURL and SSL to communicate with some payment and shipping service providers.<br />The installer has just tested your CURL SSL support and found that it failed.<br /><br />You will not be able to use PayPal or Authorize.net or FirstData/Linkpoint payment modules, and possibly other third-party contributed payment/shipping modules until you enable SSL support in CURL and PHP.<br /><br />More information on CURL can be found at the <a href="http://curl.haxx.se" target="_blank">CURL website</a>');
  break;

}

