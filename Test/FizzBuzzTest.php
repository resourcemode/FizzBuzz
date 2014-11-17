<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $number = 100;
	protected $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz($this->number);
    }

    public function testIsNumber()
    {
	    if (is_numeric($this->number)) {
		    $expected = $this->number;
            $actual = FizzBuzz::isNumber($this->number);
            $this->assertEquals($expected, $actual);
		} else {
		    $expected = 'Parameter is not a number';
            $actual = FizzBuzz::isNumber($param);
            $this->assertEquals($expected, $actual);
		}
    }
}
