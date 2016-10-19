<?php
	class SortData{

		static function salary($data,$tipo = ''){
			switch($tipo){
			case 'asc':
				usort($data, function($a, $b) {
						   return $a['salario'] > $b['salario'] ? -1 : 1;
						});
				break;
			case 'des':
				usort($data, function($a, $b) {
						   return $a['salario'] < $b['salario'] ? -1 : 1;
						});
				break;
			default:
				break;
			}
			return $data;
		}
	}
?>