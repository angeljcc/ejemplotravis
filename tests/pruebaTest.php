<?php


/**
* 
*/
class pruebaTest extends PHPUnit_Framework_TestCase
{
	private $calc=null;

	public function setUp(){
		$this->calc = new ejemplotravis\prueba;
	}

	public function tearDown(){
		$this->calc = null;
	}

	public function testInstanceOf(){
		$this->assertInstanceOf('ejemplotravis\prueba',$this->calc);
	}

	public function testInvalidArgumentisProperlyThrown(){
		$this->calc->add('A',2);
	}

	public function testValidResult(){
		$this->assertEquals(5,$this->calc->add(2,3));
	}
}