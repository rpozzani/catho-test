<?php
class LoadData{
		// Load json data from a file to an array
		static function from_json($nome = "vagas.json"){
			$json = file_get_contents($nome);
			$data = json_decode($json, true);
			return $data["docs"];
		}

	}
?>