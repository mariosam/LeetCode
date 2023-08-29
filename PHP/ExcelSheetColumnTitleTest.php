<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ExcelSheetColumnTitleTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ExcelSheetColumnTitle.php");

class ExcelSheetColumnTitleTest extends TestCase {

    public function testExcelSheetColumnTitle() {
        $obj = new ExcelSheetColumnTitle();
        //Test 1
        $want = "A";
        $got = $obj->convertToTitle( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "AB";
        $got = $obj->convertToTitle( 28 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "ZY";
        $got = $obj->convertToTitle( 701 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
