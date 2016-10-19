<?php
	// Function necessary to add the classes
	// Also checks if the user input is correct
	function filter_get($params){
		$allowed = array("texto","cidade");
		$result = array();
		foreach($params as $param => $value){
			if (in_array($param,$allowed))
				$result[$param] =  $value ;
		}
		return $result;
	}

?>