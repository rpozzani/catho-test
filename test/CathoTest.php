<?php

class CathoTest extends \PHPUnit_Framework_TestCase
{
	protected function setUp()
    {
		$_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__);
        fwrite(STDOUT, __METHOD__ . "\n");
		require_once "data.php";
		require_once "filter_int.php";
		require_once "texto.php";
		$this->data = LoadData::from_json("vagas.json");

    }
	public function tearDown() {
		unset($_SERVER['DOCUMENT_ROOT']);
	}
	
	public function testEmptyResult(){
		$this->assertTrue(sizeof($this->data)>0);		
	}
	
	/**
     * @expectedException Exception
     */
	public function testQuerytooshort(){
		$filter = new Filtertexto;
		$filter->filter($data,"A");
	}
	
	public function testOneresult(){
		$test_data = LoadData::from_json("test\\test.json");
		$filter = new Filtertexto;
		$data = $filter->filter($this->data,"Analista de Suporte de TI");
		$this->assertTrue($data === $test_data);
	
	}
}