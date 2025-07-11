<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RescheduleMeetingsForMaximumFreeTimeIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RescheduleMeetingsForMaximumFreeTimeII.php");

class RescheduleMeetingsForMaximumFreeTimeIITest extends TestCase {

    public function testRescheduleMeetingsForMaximumFreeTimeII() {
        $obj = new RescheduleMeetingsForMaximumFreeTimeII();
        //Test 1
        $want = 2;
        $got = $obj->maxFreeTime( 5, [1,3], [2,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 7;
        $got = $obj->maxFreeTime( 10, [0,7,9], [1,8,10] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 6;
        $got = $obj->maxFreeTime( 10, [0,3,7,9], [1,4,8,10] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 0;
        $got = $obj->maxFreeTime( 5, [0,1,2,3,4], [1,2,3,4,5] );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
