<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfLaserBeamsInBankTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfLaserBeamsInBank.php");

class NumberOfLaserBeamsInBankTest extends TestCase {

    public function testNumberOfLaserBeamsInBank() {
        $obj = new NumberOfLaserBeamsInBank();
        //Test 1
        $want = 8;
        $got = $obj->numberOfBeams( ["011001","000000","010100","001000"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->numberOfBeams( ["000","111","000"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
