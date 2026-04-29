<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumScoreFromGridOperationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumScoreFromGridOperations.php");

class MaximumScoreFromGridOperationsTest extends TestCase {

    public function testMaximumRunningTimeOfComputers() {
        $obj = new MaximumScoreFromGridOperations();
        //Test 1
        $want = 11;
        $got = $obj->maximumScore( [[0,0,0,0,0],[0,0,3,0,0],[0,1,0,0,0],[5,0,0,3,0],[0,0,0,0,2]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 94;
        $got = $obj->maximumScore( [[10,9,0,0,15],[7,1,0,8,0],[5,20,0,11,0],[0,0,0,1,2],[8,12,1,10,3]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
