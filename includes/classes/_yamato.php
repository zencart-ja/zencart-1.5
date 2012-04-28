<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
/*
  $Id$

  Yamato Shipping Calculator.
  Calculate shipping costs.

  2002/03/29 written by TAMURA Toshihiko (tamura@bitscope.co.jp)
  2003/04/10 modified for ms1
  2004/02/27 modified for ZenCart by HISASUE Takahiro ( hisa@flatz.jp )
  2005/02/15 modified for Yamato Transport by HIRAOKA Tadahito ( hira@s-page.net )
 * @author obitastar

 */

/*
	$rate = new _Yamato('yamato','通常便');
	$rate->SetOrigin('北海道', 'JP');   // 北海道から
	$rate->SetDest('東京都', 'JP');     // 東京都まで
	$rate->SetWeight(10);           // kg
	$quote = $rate->GetQuote();
	print $quote['type'] . "<br>";
	print $quote['cost'] . "\n";
*/
class _Yamato {
	var $quote;
	var $OriginZone;
	var $OriginCountryCode = 'JP';
	var $DestZone;
	var $DestCountryCode = 'JP';
	var $Weight = 0;
	var $Length = 0;
	var $Width  = 0;
	var $Height = 0;

	// コンストラクタ
	// $id:   module id
	// $titl: module name
	// $zone: 都道府県コード '01'～'47'
	// $country: country code
	function _Yamato($id, $title, $zone = NULL, $country = NULL) {
		$this->quote = array('id' => $id, 'title' => $title);
		if($zone) {
			$this->SetOrigin($zone, $country);
		}
	}
	// 発送元をセットする
	// $zone: 都道府県コード '01'～'47'
	// $country: country code
	function SetOrigin($zone, $country = NULL) {
		$this->OriginZone = $zone;
		if($country) {
			$this->OriginCountryCode = $country;
		}
	}
	function SetDest($zone, $country = NULL) {
		$this->DestZone = $zone;
		if($country) {
			$this->DestCountryCode = $country;
		}
	}
	function SetWeight($weight) {
		//$this->Weight = $weight;
		$this->Weight = $weight;
	}
	function SetSize($length = NULL, $width = NULL, $height = NULL) {
		if($length) {
			$this->Length = $length;
		}
		if($width) {
			$this->Width = $width;
		}
		if($height) {
			$this->Height = $height;
		}
	}
	// サイズ区分(0～4)を返す
	// 規格外の場合は9を返す
	//
	// 区分  サイズ名  ３辺計   重量
	// ----------------------------------
	// 0     60サイズ  60cmまで  2kgまで
	// 1     80サイズ  80cmまで  5kgまで
	// 2    100サイズ 100cmまで 10kgまで
	// 3    120サイズ 120cmまで 15kgまで
	// 4    140サイズ 140cmまで 20kgまで
	// 5    160サイズ 160cmまで 25kgまで
	// 9    規格外    
	function GetSizeClass() {
		$a_classes = array(
			array(0,  60,  2),  // 区分,３辺計,重量
			array(1,  80,  5),
			array(2, 100, 10),
			array(3, 120, 15),
			array(4, 140, 20),
			array(5, 160, 25)
		);

		$n_totallength = $this->Length + $this->Width + $this->Height;

		while (list($n_index, $a_limit) = each($a_classes)) {
			if ($n_totallength <= $a_limit[1] && $this->Weight <= $a_limit[2]) {
				return $a_limit[0];
			}
		}
		return -1;  // 規格外
	}
	// 送付元と送付先からキーを作成する
	//
	function GetDistKey() {
		$s_key = '';
		$s_z1 = $this->GetLZone($this->OriginZone);
		$s_z2 = $this->GetLZone($this->DestZone);
		if ( $s_z1 && $s_z2 ) {
			// 地帯コードをアルファベット順に連結する
			if ( ord($s_z1) < ord($s_z2) ) {
				$s_key = $s_z1 . $s_z2;
			} else {
				$s_key = $s_z2 . $s_z1;
			}
		}
		return $s_key;
	}
	// 都道府県コードから地帯コードを取得する
	// $zone: 都道府県コード
	function GetLZone($zone) {
		// 都道府県コードを地帯コード('A'～'M')に変換する
		//  北海道:'A' = 北海道
		//  北東北:'B' = 青森県,岩手県,秋田県
		//  南東北:'C' = 宮城県,山形県,福島県
		//  関東  :'D' = 茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,山梨県
		//  信越  :'E' = 新潟県,長野県
		//  東海  :'F' = 岐阜県,静岡県,愛知県,三重県
		//  北陸  :'G' = 富山県,石川県,福井県
		//  関西  :'H' = 滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県
		//  中国  :'I' = 鳥取県,島根県,岡山県,広島県,山口県
		//  四国  :'J' = 徳島県,香川県,愛媛県,高知県
		//  九州  :'K' = 福岡県,佐賀県,長崎県,大分県,熊本県,宮崎県,鹿児島県
		//  沖縄  :'L' = 沖縄県
		$a_zonemap = array(
		'北海道'=>'A',  
		'青森県'=>'B',  
		'岩手県'=>'B',  
		'宮城県'=>'C',  
		'秋田県'=>'B',  
		'山形県'=>'C',  
		'福島県'=>'C',  
		'茨城県'=>'D',  
		'栃木県'=>'D',  
		'群馬県'=>'D',  
		'埼玉県'=>'D',  
		'千葉県'=>'D',  
		'東京都'=>'D',  
		'神奈川県'=>'D',  
		'新潟県'=>'E',  
		'富山県'=>'G',  
		'石川県'=>'G',  
		'福井県'=>'G',  
		'山梨県'=>'D',  
		'長野県'=>'E',  
		'岐阜県'=>'F',  
		'静岡県'=>'F',  
		'愛知県'=>'F',  
		'三重県'=>'F',  
		'滋賀県'=>'H',  
		'京都府'=>'H',  
		'大阪府'=>'H',  
		'兵庫県'=>'H',  
		'奈良県'=>'H',  
		'和歌山県'=>'H',  
		'鳥取県'=>'I',  
		'島根県'=>'I',  
		'岡山県'=>'I',  
		'広島県'=>'I',  
		'山口県'=>'I',  
		'徳島県'=>'J',  
		'香川県'=>'J',  
		'愛媛県'=>'J',  
		'高知県'=>'J',  
		'福岡県'=>'K',  
		'佐賀県'=>'K',  
		'長崎県'=>'K',  
		'熊本県'=>'K',  
		'大分県'=>'K',  
		'宮崎県'=>'K',  
		'鹿児島県'=>'K',  
		'沖縄県'=>'L'   
		);
		return $a_zonemap[$zone];
	}

	function GetQuote() {
		// 距離別の価格ランク: ランクコード => 価格(60,80,100,120,140,160)
		$a_pricerank = array(
		'N01'=>array( 740, 950,1160,1370,1580,1790), // 通常便(01) 近距離
		'N02'=>array( 840,1050,1260,1470,1680,1890), // 通常便(02)
		'N03'=>array( 950,1160,1370,1580,1790,2000), // 通常便(03)
		'N04'=>array(1050,1260,1470,1680,1890,2100), // 通常便(04)
		'N05'=>array(1160,1370,1580,1790,2000,2210), // 通常便(05)
		'N06'=>array(1260,1470,1680,1890,2100,2310), // 通常便(06)
		'N07'=>array(1370,1580,1790,2000,2210,2420), // 通常便(07)
		'N08'=>array(1470,1680,1890,2100,2310,2520), // 通常便(08)
		'N09'=>array(1580,1790,2000,2210,2420,2630), // 通常便(09)
		'N10'=>array(1680,1890,2100,2310,2520,2730), // 通常便(10)
		'N11'=>array(1790,2000,2210,2420,2630,2840),  // 通常便(11) 遠距離
		'X05'=>array(1160,1680,2210,2730,3260,3780),// 
		'X06'=>array(1260,1790,2310,2840,3360,3890),// 
		'X07'=>array(1370,1890,2420,2940,3470,3990),// 
		'X08'=>array(1470,2000,2520,3050,3570,4100),// 
		'X09'=>array(1580,2100,2630,3150,3680,4200),// 
		'X12'=>array(1890,2420,2940,3470,3990,4520) // 
		);
		// 地帯 - 地帯間の価格ランク
		// (参照) http://partner.kuronekoyamato.co.jp/estimate/all_est.html
		$a_dist_to_rank = array(
		'AA'=>'N01',
		'AB'=>'N03','BB'=>'N01',
		'AC'=>'N04','BC'=>'N01','CC'=>'N01',
		'AD'=>'N05','BD'=>'N02','CD'=>'N01','DD'=>'N01',
		'AE'=>'N05','BE'=>'N02','CE'=>'N01','DE'=>'N01','EE'=>'N01',
		'AF'=>'N06','BF'=>'N03','CF'=>'N02','DF'=>'N01','EF'=>'N01','FF'=>'N01',
		'AG'=>'N06','BG'=>'N03','CG'=>'N02','DG'=>'N01','EG'=>'N01','FG'=>'N01','GG'=>'N01',
		'AH'=>'N08','BH'=>'N04','CH'=>'N03','DH'=>'N02','EH'=>'N02','FH'=>'N01','GH'=>'N01','HH'=>'N01',
		'AI'=>'N09','BI'=>'N05','CI'=>'N05','DI'=>'N03','EI'=>'N03','FI'=>'N02','GI'=>'N02','HI'=>'N01','II'=>'N01',
		'AJ'=>'N10','BJ'=>'N06','CJ'=>'N06','DJ'=>'N04','EJ'=>'N04','FJ'=>'N03','GJ'=>'N03','HJ'=>'N02','IJ'=>'N02','JJ'=>'N01',
		'AK'=>'N11','BK'=>'N07','CK'=>'N07','DK'=>'N05','EK'=>'N05','FK'=>'N03','GK'=>'N03','HK'=>'N02','IK'=>'N01','JK'=>'N02','KK'=>'N01',
		'AL'=>'X12','BL'=>'X09','CL'=>'X08','DL'=>'X06','EL'=>'X07','FL'=>'X06','GL'=>'X07','HL'=>'X06','IL'=>'X06','JL'=>'X06','KL'=>'X05','LL'=>'N01'
		);

		$s_key = $this->GetDistKey();
		if ( $s_key ) {
			$s_rank = $a_dist_to_rank[$s_key];
			if ( $s_rank ) {
				$n_sizeclass = $this->GetSizeClass();
				if ($n_sizeclass < 0) {
					$this->quote['error'] = MODULE_SHIPPING_YAMATO_TEXT_OVERSIZE;
				} else {
					$this->quote['cost'] = $a_pricerank[$s_rank][$n_sizeclass];
				}
			  //$this->quote['DEBUG'] = ' zone=' . $this->OriginZone . '=>' . $this->DestZone   //DEBUG
			  //              . ' cost=' . $a_pricerank[$s_rank][$n_sizeclass];           //DEBUG
			} else {
				$this->quote['error'] = MODULE_SHIPPING_YAMATO_TEXT_OUT_OF_AREA . '(' . $s_key .')';
			}
		} else {
			$this->quote['error'] = MODULE_SHIPPING_YAMATO_TEXT_ILLEGAL_ZONE . '(' . $this->OriginZone . '=>' . $this->DestZone . ')';
		}
		return $this->quote;
	}
}
?>
