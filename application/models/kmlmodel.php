<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class KMLModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	function find_by_id($id){
		$all = $this->find_all();
		if(isset($all[$id])){
			return $all[$id];
		}
		return null;
	}

	function find_all(){
		return  Array(
			1=>
				new FormObject(Array(
					"KMLID" => 1,
					"Time" => "2013/06/20 01:49",
					"Kml" => "kml_20130620_0149.kmz",
					"Title" => "雙方 已佔領 portal 一覽",
					"Content" => "取得 Portal 總數: 9615，綠軍 5983 個 (62.23%) ，藍軍 3632 個 (37.77%)。\n無 連線數 資料。\n無 Control Field 資料。\n無 MU 資料。"
				)),
			2 => new FormObject(Array(
				"KMLID" => 2,
				"Time" => "2013/06/21 00:38",
				"Kml" => "kml_20130621_0038.kmz",
				"Title" => " 雙方已佔領 portal 一覽",
				"Content" => "取得 Portal 總數: 8406，綠軍 4934 個 (58.7%) ，藍軍 3472 個 (41.3%)。
					連線數：4328 ，綠軍 2548 條 （58.87%) ，藍軍 1780 條 (41.13% )
					Control Field 數：2137 ，綠軍 1246 個(58.31%)，藍軍 891 個 (41.69%)
					MU：綠軍 271013 ，藍軍 253412。"
			)),
			3 => new FormObject(Array(
				"KMLID" => 3,
				"Time" => "2013/06/21 22:14 ",
				"Kml" => "20130621_221425.kmz",
				"Title" => "雙方已佔領 portal 一覽",
				"Content" =>"取得 Portal 總數: 9297，綠軍 5586 個 (60.08%) ， 藍軍 3711 個 (39.91%)。
連線數：4397，綠軍 2706 條 (61.54%) ， 藍軍 1691 條 (38.45%)。
Control Field 數：2109，綠軍 1293 個 (61.3%) ， 藍軍 816 個 (38.69%)。
MU：綠軍 153453 ，藍軍 1040139。"
			)),
			4 => new FormObject(Array(
				"KMLID" => 4,
				"Time" => "2013/06/22 01:44",
				"Kml" => "20130622_014436.kmz",
				"Title" => "雙方已佔領 portal 一覽",
				"Content" =>"取得 Portal 總數: 9261，綠軍 5605 個 (60.52%) ， 藍軍 3656 個 (39.47%)。
連線數：4283，綠軍 2675 條 (62.45%) ， 藍軍 1608 條 (37.54%)。
Control Field 數：2009，綠軍 1252 個 (62.31%) ， 藍軍 757 個 (37.68%)。
MU：綠軍 139189 ，藍軍 864192。"
			)),
			5 => new FormObject(Array(
				"KMLID" => 5,
				"Time" => "2013/06/22 13:23",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130622_132301.kmz",
				"Content" =>"取得 Portal 總數: 9215，綠軍 5497 個 (59.73%) ， 藍軍 3705 個 (40.26%)。
連線數：4317，綠軍 2657 條 (61.54%) ， 藍軍 1660 條 (38.45%)。
Control Field 數：2026，綠軍 1243 個 (61.35%) ， 藍軍 783 個 (38.64%)。
MU：綠軍 219005 ，藍軍 871601。"
			)),
			6 =>  new FormObject(Array(
				"KMLID" => 6,
				"Time" => "2013/06/22 16:33",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130622_163307.kmz",
				"Content" =>"取得 Portal 總數: 9234，綠軍 5490 個 (59.45%) ， 藍軍 3744 個 (40.54%)。
連線數：4341，綠軍 2668 條 (61.46%) ， 藍軍 1673 條 (38.53%)。
Control Field 數：2025，綠軍 1238 個 (61.13%) ， 藍軍 787 個 (38.86%)。
MU：綠軍 219288 ，藍軍 879799。"
			)),
			7 => new FormObject(Array(
				"KMLID" => 7,
				"Time" => "2013/06/23 00:04",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130623_000409.kmz",
				"Content" =>"取得 Portal 總數: 9286，綠軍 5478 個 (58.99%) ， 藍軍 3808 個 (41%)。
連線數：4211，綠軍 2521 條 (59.86%) ， 藍軍 1690 條 (40.13%)。
Control Field 數：1991，綠軍 1201 個 (60.32%) ， 藍軍 790 個 (39.67%)。
MU：綠軍 406727 ，藍軍 899318。"
			)),
			8 => new FormObject(Array(
				"KMLID" => 8,
				"Time" => "2013/06/23 06:00",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130623_060001_auto.kmz",
				"Content" =>"取得 Portal 總數: 9294，綠軍 5512 個 (59.3%) ， 藍軍 3782 個 (40.69%)。
連線數：4217，綠軍 2513 條 (59.59%) ， 藍軍 1704 條 (40.4%)。
Control Field 數：1996，綠軍 1195 個 (59.86%) ， 藍軍 801 個 (40.13%)。
MU：綠軍 431302 ，藍軍 894710。"
			)),
			9 => new FormObject(Array(
				"KMLID" => 9,
				"Time" => "2013/06/23 12:00",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130623_120001_auto.kmz",
				"Content" =>"取得 Portal 總數: 9343，綠軍 5548 個 (59.38%) ， 藍軍 3795 個 (40.61%)。
連線數：4283，綠軍 2504 條 (58.46%) ， 藍軍 1779 條 (41.53%)。
Control Field 數：2017，綠軍 1168 個 (57.9%) ， 藍軍 849 個 (42.09%)。
MU：綠軍 418514 ，藍軍 1004151。"
			)),
			10 => new FormObject(Array(
				"KMLID" => 10,
				"Time" => "2013/06/23 18:00:01",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130623_180001_auto.kmz",
				"Content" =>"取得 Portal 總數: 9439，綠軍 5566 個 (58.96%) ， 藍軍 3873 個 (41.03%)。
連線數：4180，綠軍 2385 條 (57.05%) ， 藍軍 1795 條 (42.94%)。
Control Field 數：1942，綠軍 1088 個 (56.02%) ， 藍軍 854 個 (43.97%)。
MU：綠軍 125638 ，藍軍 603928。"
			)),
			11 => new FormObject(Array(
				"KMLID" => 11,
				"Time" => "2013/06/23 20:52",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130623_205204_auto.kmz",
				"Content" => "取得 Portal 總數: 9504，綠軍 5632 個 (59.25%) ， 藍軍 3872 個 (40.74%)。
連線數：4225，綠軍 2378 條 (56.28%) ， 藍軍 1847 條 (43.71%)。
Control Field 數：1972，綠軍 1068 個 (54.15%) ， 藍軍 904 個 (45.84%)。
MU：綠軍 120652 ，藍軍 558893。
				"
			)),
			12 => new FormObject(Array(
				"KMLID" => 7,
				"Time" => "2013/06/24 00:00",
				"Title" => "雙方已佔領 portal 一覽",
				"Kml" => "20130624_000001.kmz",
				"Content" =>"取得 Portal 總數: 9525，綠軍 5634 個 (59.14%) ， 藍軍 3891 個 (40.85%)。
連線數：4228，綠軍 2374 條 (56.14%) ， 藍軍 1854 條 (43.85%)。
Control Field 數：1989，綠軍 1077 個 (54.14%) ， 藍軍 912 個 (45.85%)。
MU：綠軍 116628 ，藍軍 428408。"
			))

		);
	}
}