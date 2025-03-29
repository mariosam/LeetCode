<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumIndexOfValidSplitTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumIndexOfValidSplit.php");

class MinimumIndexOfValidSplitTest extends TestCase {

    public function testMinimumIndexOfValidSplit() {
        $obj = new MinimumIndexOfValidSplit();
        //Test 1
        $want = 2;
        $got = $obj->minimumIndex( [1,2,2,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->minimumIndex( [2,1,3,1,1,1,7,1,2,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->minimumIndex( [3,3,3,3,7,2,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
