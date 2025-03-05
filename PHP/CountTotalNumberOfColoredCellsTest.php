<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountTotalNumberOfColoredCellsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountTotalNumberOfColoredCells.php");

class CountTotalNumberOfColoredCellsTest extends TestCase {

    public function testCountTotalNumberOfColoredCells() {
        $obj = new CountTotalNumberOfColoredCells();
        //Test 1
        $want = 1;
        $got = $obj->coloredCells( 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->coloredCells( 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
