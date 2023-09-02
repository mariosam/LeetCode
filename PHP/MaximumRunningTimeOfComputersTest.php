<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumRunningTimeOfComputersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumRunningTimeOfComputers.php");

class MaximumRunningTimeOfComputersTest extends TestCase {

    public function testMaximumRunningTimeOfComputers() {
        $obj = new MaximumRunningTimeOfComputers();
        //Test 1
        $want = 4;
        $got = $obj->maxRunTime( 2, [3,3,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->maxRunTime( 2, [1,1,1,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
