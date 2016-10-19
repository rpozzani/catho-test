<?php

require_once "C:\\wamp\\www\\catho\\data.php";
require_once "C:\\wamp\\www\\catho\\filter_int.php";
require_once "C:\\wamp\\www\\catho\\texto.php";

class CathoTest extends \PHPUnit_Framework_TestCase
{
	protected function setUp()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
		$this->data = LoadData::from_json("C:\\wamp\\www\\catho\\vagas.json");
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
		$test_data = LoadData::from_json("C:\\wamp\\www\\catho\\test\\test.json");
		$filter = new Filtertexto;
		$data = $filter->filter($this->data,"Analista de Suporte de TI");
		$this->assertTrue($data === $test_data);
	
	}
}