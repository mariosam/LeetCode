<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RobotReturnToOriginTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RobotReturnToOrigin.php");

class RobotReturnToOriginTest extends TestCase {

    public function testRobotReturnToOrigin() {
        $obj = new RobotReturnToOrigin();
        //Test 1
        $want = true;
        $got = $obj->judgeCircle( "UD" );
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->judgeCircle( "LL" );
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
