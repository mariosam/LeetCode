<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountOperationsToObtainZeroTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountOperationsToObtainZero.php");

class CountOperationsToObtainZeroTest extends TestCase {

    public function testCountOperationsToObtainZero() {
        $obj = new CountOperationsToObtainZero();
        //Test 1
        $want = 3;
        $got = $obj->countOperations( 2, 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->countOperations( 10, 10 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
