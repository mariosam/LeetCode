<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit WaysToExpressAnIntegerAsSumOfPowersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("WaysToExpressAnIntegerAsSumOfPowers.php");

class WaysToExpressAnIntegerAsSumOfPowersTest extends TestCase {

    public function testWaysToExpressAnIntegerAsSumOfPowers() {
        $obj = new WaysToExpressAnIntegerAsSumOfPowers();
        //Test 1
        $want = 1;
        $got = $obj->numberOfWays(10, 2);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->numberOfWays(4, 1);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
