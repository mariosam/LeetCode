<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumScoreByChangingTwoElementsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumScoreByChangingTwoElements.php");

class MinimumScoreByChangingTwoElementsTest extends TestCase {

    public function testMinimumScoreByChangingTwoElements() {
        $obj = new MinimumScoreByChangingTwoElements();
        //Test 1
        $want = 3;
        $got = $obj->minimizeSum( [1,4,7,8,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->minimizeSum( [1,4,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
