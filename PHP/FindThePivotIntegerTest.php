<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindThePivotIntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindThePivotInteger.php");

class FindThePivotIntegerTest extends TestCase {

    public function testFindThePivotInteger() {
        $obj = new FindThePivotInteger();
        //Test 1
        $want = 6;
        $got = $obj->pivotInteger( 8 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->pivotInteger( 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->pivotInteger( 4 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
