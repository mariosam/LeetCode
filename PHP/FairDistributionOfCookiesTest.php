<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FairDistributionOfCookiesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FairDistributionOfCookies.php");

class FairDistributionOfCookiesTest extends TestCase {

    public function testFairDistributionOfCookies() {
        $obj = new FairDistributionOfCookies();
        //Test 1
        $want = 31;
        $got = $obj->distributeCookies( [8,15,10,20,8], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 7;
        $got = $obj->distributeCookies( [6,1,3,2,2,4,1,2], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
