<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit Finding3DigitEvenNumbersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Finding3DigitEvenNumbers.php");

class Finding3DigitEvenNumbersTest extends TestCase {

    public function testFinding3DigitEvenNumbers() {
        $obj = new Finding3DigitEvenNumbers();
        //Test 1
        $want = [102,120,130,132,210,230,302,310,312,320];
        $got = $obj->findEvenNumbers( [2,1,3,0] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertSame($want, $got);
        //Test 2
        $want = [222,228,282,288,822,828,882];
        $got = $obj->findEvenNumbers( [2,2,8,8,2] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertSame($want, $got);
        //Test 33
        $want = [];
        $got = $obj->findEvenNumbers( [3,7,5] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertSame($want, $got);
    }
}
