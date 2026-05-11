<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SeparateTheDigitsInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SeparateTheDigitsInAnArray.php");

class SeparateTheDigitsInAnArrayTest extends TestCase {

    public function testSeparateTheDigitsInAnArray() {
        $obj = new SeparateTheDigitsInAnArray();
        //Test 1
        $want = [1,3,2,5,8,3,7,7];
        $got = $obj->separateDigits( [13,25,83,77] );
        echo "\nTest 1: retornou " . implode(',', $got) . " == esperado: " . implode(',', $want);
        $this->assertEquals($want, $got, '', 0.00001);
        //Test 2
        $want = [7,1,3,9];
        $got = $obj->separateDigits( [7,1,3,9] );
        echo "\nTest 2: retornou " . implode(',', $got) . " == esperado: " . implode(',', $want);
        $this->assertEquals($want, $got, '', 0.00001);
    }
}
