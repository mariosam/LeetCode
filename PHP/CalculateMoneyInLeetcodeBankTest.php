<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CalculateMoneyInLeetcodeBankTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CalculateMoneyInLeetcodeBank.php");

class CalculateMoneyInLeetcodeBankTest extends TestCase {

    public function testCalculateMoneyInLeetcodeBank() {
        $obj = new CalculateMoneyInLeetcodeBank();
        //Test 1
        $want = 10;
        $got = $obj->totalMoney( 4 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 37;
        $got = $obj->totalMoney( 10 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 96;
        $got = $obj->totalMoney( 20 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
