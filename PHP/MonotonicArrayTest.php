<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MonotonicArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MonotonicArray.php");

class MonotonicArrayTest extends TestCase {

    public function testMonotonicArray() {
        $obj = new MonotonicArray();
        //Test 1
        $want = true;
        $got = $obj->isMonotonic( [1,2,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->isMonotonic( [6,5,4,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isMonotonic( [1,3,2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
