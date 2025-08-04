<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumFruitsHarvestedAfterAtMostKStepsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumFruitsHarvestedAfterAtMostKSteps.php");

class MaximumFruitsHarvestedAfterAtMostKStepsTest extends TestCase {

    public function testMaximumFruitsHarvestedAfterAtMostKSteps() {
        $obj = new MaximumFruitsHarvestedAfterAtMostKSteps();
        //Test 1
        $want = 9;
        $got = $obj->maxTotalFruits( [[2,8],[6,3],[8,6]], 5, 4 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 14;
        $got = $obj->maxTotalFruits( [[0,9],[4,1],[5,7],[6,2],[7,4],[10,9]], 5, 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->maxTotalFruits( [[0,3],[6,4],[8,5]], 3, 2 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
