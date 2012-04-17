<?php
/**
 * Authorize.net SIM Payment Module
 *
 * @package languageDefines
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 15868 2010-04-11 01:14:50Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Credit Card');  // Payment option title as displayed to the customer
  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.' : '') . '<br /><br /><strong>SETTINGS</strong><br />Your "response" and "receipt" URL settings in your Authorize.net Merchant Profile can be left BLANK, or can be set to point to http://your_domain.com/foldername/index.php?main_page=checkout_payment');
  } else {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Click to Login to the Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area');
  }

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Type:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'カード名義:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'カード番号:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', '有効期限:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'CVV Number:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'What\'s this?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* カード名義は' . CC_OWNER_MIN_LENGTH . '文字以上必要です。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* カード番号は' . CC_NUMBER_MIN_LENGTH . '文字以上必要です。\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'クレジットカードの処理にエラーが発生しました. もう一度試してください。.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'クレジットカードの受付が拒否されました。他のクレジットカードを試すか詳細を加盟クレジット会社へ問い合わせてください。');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'クレジットカード エラー');
