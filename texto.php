<?php
	require_once "filter_int.php";
	
	// Class that searches the data based on Title and Description
	class Filtertexto implements FilterData {
		
		public function filter($data,$query){
		
			// Check to make sure the user is not querying all the base
			if (strlen($query) < 3)
				throw new Exception('Busca muito pequena.');
			$query = strtolower($query);
			$data_aux = array();
			
			foreach($data as $job){
				$job_title = strtolower($job['title']);
				$job_desc = strtolower($job['description']);
				if (strpos($job_title, $query) !== false or strpos($job_desc, $query) !== false)
					$data_aux[] = $job; 
			}
			return $data_aux;
		}
	}
?>