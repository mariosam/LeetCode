<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CoinChangeIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CoinChangeII.php");

class CoinChangeIITest extends TestCase {

    public function testCoinChangeII() {
        $obj = new CoinChangeII();
        //Test 1
        $want = 4;
        $got = $obj->change(5, [1,2,5]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->change(3, [2]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->change(10, [10]);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
