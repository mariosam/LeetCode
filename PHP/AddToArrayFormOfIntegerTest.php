<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AddToArrayFormOfIntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AddToArrayFormOfInteger.php");

class AddToArrayFormOfIntegerTest extends TestCase {

    public function testAddToArrayFormOfInteger() {
        $obj = new AddToArrayFormOfInteger();
        //Test 1
        $want = [1,2,3,4];
        $got = $obj->addToArrayForm( [1,2,0,0], 34 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [4,5,5];
        $got = $obj->addToArrayForm( [2,7,4], 181 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [1,0,2,1];
        $got = $obj->addToArrayForm( [2,1,5], 806 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 4
        $want = [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,5,7,9];
        $got = $obj->addToArrayForm( [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,0,6,3], 516 );
        echo "\nTest 4: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 5
        $want = [3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,8,3,4];
        $got = $obj->addToArrayForm( [3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,1,6,4], 670 );
        echo "\nTest 5: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 6
        $want = [4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,6,3,4,0,6];
        $got = $obj->addToArrayForm( [4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,5,9,5,9,1], 3815 );
        echo "\nTest 6: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
