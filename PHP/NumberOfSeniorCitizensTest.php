<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfSeniorCitizensTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfSeniorCitizens.php");

class NumberOfSeniorCitizensTest extends TestCase {

    public function testNumberOfSeniorCitizens() {
        $obj = new NumberOfSeniorCitizens();
        //Test 1
        $want = 2;
        $got = $obj->countSeniors( ["7868190130M7522","5303914400F9211","9273338290F4010"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countSeniors( ["1313579440F2036","2921522980M5644"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
