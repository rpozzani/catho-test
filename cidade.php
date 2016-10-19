<?php
	require_once "filter_int.php";
	
	// Class to filter the data based on the city
	class Filtercidade implements FilterData {
		public function filter($data,$city){
			$city = strtolower($city);
			$data_aux = array();
			foreach($data as $dat){
				if ( strpos (strtolower($dat['cidade'][0]), $city) !== false)
					$data_aux[] = $dat; 
			}
			return $data_aux;
		
		}
}
?>