<?php

use ComorDev\FastBracketCheck\FastBracketChecker;
use PHPUnit\Framework\TestCase;

class FastBracketCheckerTest extends TestCase {

	public function testValidBrackets()
	{
		$this->assertTrue(FastBracketChecker::isValid("{{lajkdhf{adfa}{}adfasdfadf{}}}"));
	}

	public function testInvalidBrackets(){
		$this->assertFalse(FastBracketChecker::isValid("}}fsafsasfasaffs{}"));
	}

	public function testEmptyString(){
		$this->assertTrue(FastBracketChecker::isValid(""));
	}

	public function testValidBigStringBrackets(){
		$code = str_repeat("{", 50000) . str_repeat("}", 50000);
		$this->assertTrue(FastBracketChecker::isValid($code));
	}


	public function testInvalidBigStringBrackets(){
		$code = str_repeat("{", 50000) . str_repeat("}", 50000 - 1);
		$this->assertFalse(FastBracketChecker::isValid($code));
	}

	public function testValidString(){
		$this->assertTrue(FastBracketChecker::isValid("Hello world!"));
	}


	public function testInvalidString(){
		$this->assertFalse(FastBracketChecker::isValid("}saffsafsaf"));
	}
}