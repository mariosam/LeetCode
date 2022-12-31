<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MajorityElementTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MajorityElement.php");

class MajorityElementTest extends TestCase {

    public function testMajorityElement() {
        $obj = new MajorityElement();
        //Test 1
        $want = 3;
        $got = $obj->majorityElement( [3,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->majorityElement( [2,2,1,1,1,2,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
