<?php
	class SortData{
		
		// Sort the data based on the 'salario' field
		static function salary($data,$tipo = ''){
			switch($tipo){
			case 'des':
				usort($data, function($a, $b) {
						   return $a['salario'] > $b['salario'] ? -1 : 1;
						});
				break;
			case 'asc':
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