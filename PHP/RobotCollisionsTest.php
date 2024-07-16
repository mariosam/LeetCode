<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RobotCollisionsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RobotCollisions.php");

class RobotCollisionsTest extends TestCase {

    public function testRobotCollisions() {
        $obj = new RobotCollisions();
        //Test 1
        $want = [2,17,9,15,10];
        $got = $obj->survivedRobotsHealths( [5,4,3,2,1], [2,17,9,15,10], "RRRRR" );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [14];
        $got = $obj->survivedRobotsHealths( [3,5,2,6], [10,10,15,12], "RLRL" );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [];
        $got = $obj->survivedRobotsHealths( [1,2,5,6], [10,10,11,11], "RLRL" );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
