<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumIncrementToMakeArrayUniqueTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumIncrementToMakeArrayUnique.php");

class MinimumIncrementToMakeArrayUniqueTest extends TestCase {

    public function testMinimumIncrementToMakeArrayUnique() {
        $obj = new MinimumIncrementToMakeArrayUnique();
        //Test 1
        $want = 1;
        $got = $obj->minIncrementForUnique( [1,2,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->minIncrementForUnique( [3,2,1,2,1,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
