<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindNumbersWithEvenNumberOfDigitsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindNumbersWithEvenNumberOfDigits.php");

class FindNumbersWithEvenNumberOfDigitsTest extends TestCase {

    public function testFindNumbersWithEvenNumberOfDigits() {
        $obj = new FindNumbersWithEvenNumberOfDigits();
        //Test 1
        $want = 2;
        $got = $obj->findNumbers( [12,345,2,6,7896] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->findNumbers( [555,901,482,1771] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
