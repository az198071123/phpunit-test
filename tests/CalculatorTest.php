<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * CalculatorTest
 * @group test
 */
class CalculatorTest extends TestCase
{
    /** @test */
    public function testAdd()
    {
        // arrange
        $target = new Calculator();
        $expected = 2;
        // actual
        $actual = $target->add(1, 1);
        // assert
        $this->assertEquals($expected, $actual);
    }
    /** @test */
    public function testSub()
    {
        // arrange
        $target = new Calculator();
        $expected = 2;
        // actual
        $actual = $target->sub(3, 1);
        // assert
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function test_Sum()
    {
        // arrange
        $target = new Calculator();
        $expected = 55;
        // actual
        $actual = $target->sum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        // assert
        $this->assertEquals($expected, $actual);
    }

}
