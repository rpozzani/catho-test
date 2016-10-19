<?php
	header('Content-Type: application/json; charset=utf-8');
	require_once "functions.php";
	require_once "data.php";
	require_once "sort.php";




	$data = LoadData::from_json("vagas.json");
	$params = filter_get($_GET);
	
	foreach($params as $param => $value){
		$class = "Filter$param";
		require_once $param . ".php";
		$filter = new $class;
		$data = $filter->filter($data,$value);
	}


	$order = isset($_GET['ordem']) ? $_GET['ordem'] : '';
	$data = SortData::salary($data,$order);
	$response["results"] = $data;
	echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>