<?php

use ComorDev\FastBracketCheck\StandardBracketChecker;
use PHPUnit\Framework\TestCase;

class StandardBracketCheckerTest extends TestCase {

	public function testValidBrackets()
	{
		$this->assertTrue(StandardBracketChecker::isValid("{{lajkdhf{adfa}{}adfasdfadf{}}}"));
	}

	public function testInvalidBrackets(){
		$this->assertFalse(StandardBracketChecker::isValid("}}fsafsasfasaffs{}"));
	}

	public function testEmptyString(){
		$this->assertTrue(StandardBracketChecker::isValid(""));
	}

	public function testValidBigStringBrackets(){
		$code = str_repeat("{", 50000) . str_repeat("}", 50000);
		$this->assertTrue(StandardBracketChecker::isValid($code));
	}


	public function testInvalidBigStringBrackets(){
		$code = str_repeat("{", 50000) . str_repeat("}", 50000 - 1);
		$this->assertFalse(StandardBracketChecker::isValid($code));
	}

	public function testValidString(){
		$this->assertTrue(StandardBracketChecker::isValid("Hello world!"));
	}

	public function testInvalidString(){
		$this->assertFalse(StandardBracketChecker::isValid("}saffsafsaf"));
	}
}