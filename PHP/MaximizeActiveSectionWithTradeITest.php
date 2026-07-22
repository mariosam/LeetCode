<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximizeActiveSectionWithTradeITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximizeActiveSectionWithTradeI.php");

class MaximizeActiveSectionWithTradeITest extends TestCase {

    public function testMaxActiveSectionsAfterTrade() {
        $obj = new MaximizeActiveSectionWithTradeI();
        //Test 1
        $want = 1;
        $got = $obj->maxActiveSectionsAfterTrade("01");
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->maxActiveSectionsAfterTrade("0100");
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 7;
        $got = $obj->maxActiveSectionsAfterTrade("1000100");
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 4;
        $got = $obj->maxActiveSectionsAfterTrade("01010");
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
