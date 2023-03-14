<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KthMissingPositiveNumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KthMissingPositiveNumber.php");

class KthMissingPositiveNumberTest extends TestCase {

    public function testKthMissingPositiveNumber() {
        $obj = new KthMissingPositiveNumber();
        //Test 1
        $want = 9;
        $got = $obj->findKthPositive( [2,3,4,7,11], 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->findKthPositive( [1,2,3,4], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
