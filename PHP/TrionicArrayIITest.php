<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TrionicArrayIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TrionicArrayII.php");

class TrionicArrayIITest extends TestCase {

    public function testTrionicArrayII() {
        $obj = new TrionicArrayII();
        //Test 1
        $want = -4;
        $got = $obj->maxSumTrionic( [0,-2,-1,-3,0,2,-1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 14;
        $got = $obj->maxSumTrionic( [1,4,2,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
