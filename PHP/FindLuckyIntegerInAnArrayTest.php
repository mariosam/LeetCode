<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindLuckyIntegerInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindLuckyIntegerInAnArray.php");

class FindLuckyIntegerInAnArrayTest extends TestCase {

    public function testFindLuckyIntegerInAnArray() {
        $obj = new FindLuckyIntegerInAnArray();
        //Test 1
        $want = 2;
        $got = $obj->findLucky( [2,2,3,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->findLucky( [1,2,2,3,3,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->findLucky( [2,2,2,3,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
