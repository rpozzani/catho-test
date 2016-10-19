<?php
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