<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BitwiseORsOfSubarraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BitwiseORsOfSubarrays.php");

class BitwiseORsOfSubarraysTest extends TestCase {

    public function testBitwiseORsOfSubarrays() {
        $obj = new BitwiseORsOfSubarrays();
        //Test 1
        $want = 1;
        $got = $obj->subarrayBitwiseORs( [0] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->subarrayBitwiseORs( [1,1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->subarrayBitwiseORs( [1,2,4] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
