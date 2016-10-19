<?php

	/* Test program for Catho
	   BackEnd will return a json based on the
	   filters chosen by the user 
	   Made by Ramiro Pozzani (ramiropozzani@gmail.com )
	   */
	   
	header('Content-Type: application/json; charset=utf-8');
	
	// Add the necessary functions and classes
	require_once "functions.php";
	require_once "data.php";
	require_once "sort.php";




	$data = LoadData::from_json("vagas.json");
	$params = filter_get($_GET);
	
	// Runs through $_GET and performs the necessary filters
	foreach($params as $param => $value){
		$class = "Filter$param";
		require_once $param . ".php";
		$filter = new $class;
		$data = $filter->filter($data,$value);
	}

	// If necessary, sort the results
	$order = isset($_GET['ordem']) ? $_GET['ordem'] : '';
	$data = SortData::salary($data,$order);
	
	// Returns the Json
	$response["docs"] = $data;
	echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>