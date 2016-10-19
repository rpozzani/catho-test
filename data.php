<?php
class LoadData{
		
		static function from_json($nome = "vagas.json"){
			$json = file_get_contents($nome);
			$data = json_decode($json, true);
			return $data["docs"];
		}

	}
?>