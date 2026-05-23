<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckifArrayIsSortedAndRotatedTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckifArrayIsSortedAndRotated.php");

class CheckifArrayIsSortedAndRotatedTest extends TestCase {

    public function testCheckIfArrayIsSortedAndRotated() {
        $obj = new CheckifArrayIsSortedAndRotated();
        //Test 1
        $want = true;
        $got = $obj->check( [3, 4, 5, 1, 2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->check( [2, 1, 3, 4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->check( [1, 2, 3] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
