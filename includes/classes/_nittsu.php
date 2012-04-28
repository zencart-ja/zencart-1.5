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

  Nittsu Shipping Calculator.
  Calculate shipping costs.

  2002/03/29 written by TAMURA Toshihiko (tamura@bitscope.co.jp)
  2003/04/10 modified for ms1
  2004/02/27 modified for ZenCart by HISASUE Takahiro ( hisa@flatz.jp )
  2005/02/04 modified for ZenCart ver1.2 by Yatts (info@yatts.jp)
 * @author obitastar
 */
/*
	$rate = new _Nittsu('nittsu','通常便');
	$rate->SetOrigin('北海道', 'JP');   // 北海道から
	$rate->SetDest('東京都', 'JP');     // 東京都まで
	$rate->SetWeight(10);           // kg
	$quote = $rate->GetQuote();
	print $quote['type'] . "<br>";
	print $quote['cost'] . "\n";
*/
class _Nittsu {
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
	function _Nittsu($id, $title, $zone = NULL, $country = NULL) {
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
	// 5    170サイズ 170cmまで 30kgまで
	// 9    規格外    
	function GetSizeClass() {
		$a_classes = array(
			array(0,  60,  2),  // 区分,３辺計,重量
			array(1,  80,  5),
			array(2, 100, 10),
			array(3, 120, 15),
			array(4, 140, 20),
			array(5, 170, 30)
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
		//  北海道　:'A' = 北海道
		//  東北　　:'B' = 青森県,岩手県,秋田県,宮城県,山形県,福島県
		//  関東信越:'C' = 茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,山梨県,新潟県,長野県
		//  中部北陸:'D' = 岐阜県,静岡県,愛知県,三重県,富山県,石川県,福井県
		//  関西  　:'E' = 滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県
		//  中国  　:'F' = 鳥取県,島根県,岡山県,広島県,山口県
		//  四国  　:'G' = 徳島県,香川県,愛媛県,高知県
		//  九州　　:'H' = 福岡県,佐賀県,長崎県,大分県,熊本県,宮崎県,鹿児島県
		//  沖縄 　 :'I' = 沖縄県 (通常便は配達区域外)
		$a_zonemap = array(
		'北海道'=>'A',  
		'青森県'=>'B',  
		'岩手県'=>'B',  
		'宮城県'=>'B',  
		'秋田県'=>'B',  
		'山形県'=>'B',  
		'福島県'=>'B',  
		'茨城県'=>'C',  
		'栃木県'=>'C',  
		'群馬県'=>'C',  
		'埼玉県'=>'C',  
		'千葉県'=>'C',  
		'東京都'=>'C',  
		'神奈川県'=>'C',  
		'新潟県'=>'C',  
		'富山県'=>'D',  
		'石川県'=>'D',  
		'福井県'=>'D',  
		'山梨県'=>'C',  
		'長野県'=>'C',  
		'岐阜県'=>'D',  
		'静岡県'=>'D',  
		'愛知県'=>'D',  
		'三重県'=>'D',  
		'滋賀県'=>'E',  
		'京都府'=>'E',  
		'大阪府'=>'E',  
		'兵庫県'=>'E',  
		'奈良県'=>'E',  
		'和歌山県'=>'E',  
		'鳥取県'=>'F',  
		'島根県'=>'F',  
		'岡山県'=>'F',  
		'広島県'=>'F',  
		'山口県'=>'F',  
		'徳島県'=>'G',  
		'香川県'=>'G',  
		'愛媛県'=>'G',  
		'高知県'=>'G',  
		'福岡県'=>'H',  
		'佐賀県'=>'H',  
		'長崎県'=>'H',  
		'熊本県'=>'H',  
		'大分県'=>'H',  
		'宮崎県'=>'H',  
		'鹿児島県'=>'H',  
		'沖縄県'=>'I'   
		);
		return $a_zonemap[$zone];
	}

	function GetQuote() {
		// 距離別の価格ランク: ランクコード => 価格(60,80,100,120,140,170)
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
		'N11'=>array(1790,2000,2210,2420,2630,2840), // 通常便(11)
	'N12'=>array(1160,1680,2210,2730,3260,3780), // 通常便(12)
	'N13'=>array(1260,1790,2310,2840,3360,3890), // 通常便(13)
	'N14'=>array(1470,2000,2520,3050,3570,4100), // 通常便(14)
	'N15'=>array(1890,2420,2940,3470,3990,4520)  // 通常便(15) 遠距離
		);
		// 地帯 - 地帯間の価格ランク
		// (参照) http://www.nittsu.co.jp/pelican/fare/index.htm
		$a_dist_to_rank = array(
	'AA'=>'N01',
	'AB'=>'N03','BB'=>'N01',
	'AC'=>'N05','BC'=>'N01','CC'=>'N01',
	'AD'=>'N06','BD'=>'N02','CD'=>'N01','DD'=>'N01',
	'AE'=>'N08','BE'=>'N03','CE'=>'N02','DE'=>'N01','EE'=>'N01',
	'AF'=>'N09','BF'=>'N05','CF'=>'N03','DF'=>'N02','EF'=>'N01','FF'=>'N01',
	'AG'=>'N10','BG'=>'N06','CG'=>'N04','DG'=>'N03','EG'=>'N02','FG'=>'N02','GG'=>'N01',
	'AH'=>'N11','BH'=>'N07','CH'=>'N05','DH'=>'N03','EH'=>'N02','FH'=>'N01','GH'=>'N02','HH'=>'N01',
	'AI'=>'N15','BI'=>'N14','CI'=>'N13','DI'=>'N13','EI'=>'N13','FI'=>'N13','GI'=>'N13','HI'=>'N12','II'=>''
		);

		$s_key = $this->GetDistKey();
		if ( $s_key ) {
			$s_rank = $a_dist_to_rank[$s_key];
			if ( $s_rank ) {
				$n_sizeclass = $this->GetSizeClass();
				if ($n_sizeclass < 0) {
					$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_OVERSIZE;
				} else {
					$this->quote['cost'] = $a_pricerank[$s_rank][$n_sizeclass];
				}
			  //$this->quote['DEBUG'] = ' zone=' . $this->OriginZone . '=>' . $this->DestZone   //DEBUG
			  //              . ' cost=' . $a_pricerank[$s_rank][$n_sizeclass];           //DEBUG
			} else {
				$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_OUT_OF_AREA . '(' . $s_key .')';
			}
		} else {
			$this->quote['error'] = MODULE_SHIPPING_NITTSU_TEXT_ILLEGAL_ZONE . '(' . $this->OriginZone . '=>' . $this->DestZone . ')';
		}
		return $this->quote;
	}
}
?>
