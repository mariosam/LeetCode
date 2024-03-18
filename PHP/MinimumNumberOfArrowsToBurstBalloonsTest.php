<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfArrowsToBurstBalloonsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfArrowsToBurstBalloons.php");

class MinimumNumberOfArrowsToBurstBalloonsTest extends TestCase {

    public function testMinimumNumberOfArrowsToBurstBalloons() {
        $obj = new MinimumNumberOfArrowsToBurstBalloons();
        //Test 1
        $want = 2;
        $got = $obj->findMinArrowShots( [[10,16],[2,8],[1,6],[7,12]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->findMinArrowShots( [[1,2],[3,4],[5,6],[7,8]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->findMinArrowShots( [[1,2],[2,3],[3,4],[4,5]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
