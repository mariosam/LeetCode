<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumAveragePassRatioTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumAveragePassRatio.php");

class MaximumAveragePassRatioTest extends TestCase {

    public function testMaximumAveragePassRatio() {
        $obj = new MaximumAveragePassRatio();
        //Test 1
        $want = 0.78333;
        $got = $obj->maxAverageRatio( [[1,2],[3,5],[2,2]], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0.53485;
        $got = $obj->maxAverageRatio( [[2,4],[3,9],[4,5],[2,10]], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
