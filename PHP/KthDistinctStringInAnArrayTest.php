<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KthDistinctStringInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KthDistinctStringInAnArray.php");

class KthDistinctStringInAnArrayTest extends TestCase {

    public function testKthDistinctStringInAnArray() {
        $obj = new KthDistinctStringInAnArray();
        //Test 1
        $want = "a";
        $got = $obj->kthDistinct( ["d","b","c","b","c","a"], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "aaa";
        $got = $obj->kthDistinct( ["aaa","aa","a"], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "";
        $got = $obj->kthDistinct( ["a","b","a"], 3 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
