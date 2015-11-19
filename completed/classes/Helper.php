<?php
class Helper {

	
	
	
	public static function slash2HyphenDate($date = null, $format = 'eu') {
		if (!empty($date)) {
			$date = explode('/', $date);
			if (is_array($date) && count($date) === 3) {
				switch($format) {
					case 'us':
					return $date[2].'-'.$date[0].'-'.$date[1];
					break;
					default:
					return implode('-', array_reverse($date));
				}
			}
		}
	}
	



}