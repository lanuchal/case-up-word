<?php$WEB_TITLE = "CASEUP WORLD - แหล่งจำหน่ายเคสราคาถูกที่สุด";    function slug($text){	    $text=preg_replace('/[^A-Za-z0-9ก-๙\-]/u', '-',str_replace('&', '-and-', $text));	$text = preg_replace('~-+~', '-', $text);	$text = strtolower($text);	return $text;}function excerp($text,$word){		if(utf8_strlen($text)>$word){$more=" [..]";}else{$more="";}	return mb_substr($text,0,$word,"utf-8")."$more";}function get_title($url_name,$post_id=''){		global $WEB_TITLE;    global $WEB_DESC1;	global $arr_cate;	global $arr_home;	global $cate;	global $tag;	global $WEB_TEL1;	global $WEB_TEL2;	switch ($url_name) {		case "main": return $WEB_TITLE." - ".$WEB_DESC1;  break;				case "page-product-detail": return get_post_title($post_id)." | ".$WEB_TITLE; break;        case "page-news-detail": return get_post_title($post_id)." | ".$WEB_TITLE; break;        case "page-portfolio-detail": return get_post_title($post_id)." | ".$WEB_TITLE; break;		case "page-article-detail": return get_post_title($post_id)." | ".$WEB_TITLE; break;        case "page-review": return "รีวิวลูกค้าของเรา | ".$WEB_TITLE; break;        case "page-news": return "ข่าวสารความรู้ | ".$WEB_TITLE; break;					case "page-product": return "สินค้าของเรา | ".$WEB_TITLE; break;			case "page-about": return "เกี่ยวกับเรา | ".$WEB_TITLE; break;		case "page-portfolio": return "ผลงานของเรา | ".$WEB_TITLE; break;		case "page-contact": return "ติดต่อเรา | ".$WEB_TITLE; break;		case "tag": return $tag." โทร.".$WEB_TEL1.", ".$WEB_TEL2; break;		default: return $WEB_TITLE;	}}function date_thai($date,$show_time){		  list($d,$t)=explode(" ",$date);		  list($y,$m,$d)=explode("-",$d);		  $y+=543;		  $mt=$m;		   		if($mt==1){ 			$mt= "ม.ค.";		}else if($mt==2){			$mt= "ก.พ."; 		}else if($mt==3){ 			$mt= "มี.ค."; 		}else if($mt==4){ 			$mt= "เม.ย.";		}else if($mt==5){ 			$mt= "พ.ค."; 		}else if($mt==6){			$mt= "มิ.ย.";		}else if($mt==7){ 			$mt= "ก.ค.";		}else if($mt==8){			$mt= "ส.ค.";		}else if($mt==9){			$mt= "ก.ย."; 		}else if($mt==10){ 			$mt= "ต.ค.";		}else if($mt==11){ 			$mt= "พ.ย."; 		}else if($mt==12){ 			$mt= "ธ.ค."; 		}		if($show_time==false){  			return " $d $mt&nbsp;$y ";  	}else{// end show date == false				return " $d $mt&nbsp;".substr($y,2,4)."&nbsp; เวลา : ".substr($t,0,-3)." น.";				}// end if}function exp_date($date,$type){	list($d,$t)=explode(" ",$date);	list($y,$m,$d)=explode("-",$d);		  	if($type=="y"){return $y;}	if($type=="m"){return $m;}	if($type=="d"){return $d;}}function get_month($m){	if($m==1){return "มกราคม";}	if($m==2){return "กุมภาพันธ์";}	if($m==3){return "มีนาคม";}	if($m==4){return "เมษายน";}	if($m==5){return "พฤษภาคม";}	if($m==6){return "มิถุนายน";}	if($m==7){return "กรกฎาคม";}	if($m==8){return "สิงหาคม";}	if($m==9){return "กันยายน";}	if($m==10){return "ตุลาคม";}	if($m==11){return "พฤศจิกายน";}	if($m==12){return "ธันวาคม";}	}?>