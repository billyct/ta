<?php
namespace TA;

class Time {

	public static function nicetime($second, $isShowDate = 0) {
		if (empty ( $second )) {
			return "没有日期";
		}

		$limit = time() - $second;

		if ($isShowDate == 1){
			if (time() >= $second) {
				return "结束";
			}
			return date('Y-m-d H:i', $second);
		}
		if ($isShowDate == 2) {
			return date('Y-m-d H:i', $second);
		}
		if ($limit < 30){
			return '刚刚';
		}	
		if($limit < 60){
			return $limit . '秒钟之前';
		}
		if($limit >= 60 && $limit < 3600){
			return floor($limit/60) . '分钟之前';
		}
		if($limit >= 3600 && $limit < 86400){
			return floor($limit/3600) . '小时之前';
		}
		if($limit >= 86400 and $limit<259200){
			return floor($limit/86400) . '天之前';
		}
		if($limit >= 259200){
			return date('Y-m-d H:i', $second);
		}else{
			return '';
		}
	}
}

?>