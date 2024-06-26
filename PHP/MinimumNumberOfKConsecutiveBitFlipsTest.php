<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfKConsecutiveBitFlipsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfKConsecutiveBitFlips.php");

class MinimumNumberOfKConsecutiveBitFlipsTest extends TestCase {

    public function testMinimumNumberOfKConsecutiveBitFlips() {
        $obj = new MinimumNumberOfKConsecutiveBitFlips();
        //Test 1
        $want = 2;
        $got = $obj->minKBitFlips( [0,1,0], 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->minKBitFlips( [1,1,0], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 3;
        $got = $obj->minKBitFlips( [0,0,0,1,0,1,1,0], 3 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
