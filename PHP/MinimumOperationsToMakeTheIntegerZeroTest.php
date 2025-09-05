<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumOperationsToMakeTheIntegerZeroTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumOperationsToMakeTheIntegerZero.php");

class MinimumOperationsToMakeTheIntegerZeroTest extends TestCase {

    public function testMinimumOperationsToMakeTheIntegerZero() {
        $obj = new MinimumOperationsToMakeTheIntegerZero();
        //Test 1
        $want = 3;
        $got = $obj->makeTheIntegerZero( 3, -2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->makeTheIntegerZero( 5, 7 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
