<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunitStrangePrinterTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("StrangePrinter.php");

class StrangePrinterTest extends TestCase {

    public function testStrangePrinter() {
        $obj = new StrangePrinter();
        //Test 1
        $want = 2;
        $got = $obj->strangePrinter( "aaabbb" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->strangePrinter( "aba" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
