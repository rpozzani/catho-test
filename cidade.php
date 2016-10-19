<?php
	require_once "filter_int.php";
	class Filtercidade implements FilterData {
		public function filter($vagas,$cidade){
			$cidade = strtolower($cidade);
			$vagas_aux = array();
			foreach($vagas as $vaga){
				if ( strpos (strtolower($vaga['cidade'][0]), $cidade) !== false)
					$vagas_aux[] = $vaga; 
			}
			return $vagas_aux;
		
		}
}
?>