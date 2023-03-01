<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ClimbingStairsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ClimbingStairs.php");

class ClimbingStairsTest extends TestCase {

    public function testClimbingStairs() {
        $obj = new ClimbingStairs();
        //Test 1
        $want = 2;
        $got = $obj->climbStairs( 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->climbStairs( 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->climbStairs( 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
