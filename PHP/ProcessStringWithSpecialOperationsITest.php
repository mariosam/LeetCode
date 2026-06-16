<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ProcessStringWithSpecialOperationsITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ProcessStringWithSpecialOperationsI.php");

class ProcessStringWithSpecialOperationsITest extends TestCase {

    public function testProcessStr() {
        $obj = new ProcessStringWithSpecialOperationsI();
        //Test 1
        $want = "ba";
        $got = $obj->processStr("a#b%*");
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "";
        $got = $obj->processStr("z*#");
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
