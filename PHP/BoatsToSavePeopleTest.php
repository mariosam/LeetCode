<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BoatsToSavePeopleTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BoatsToSavePeople.php");

class BoatsToSavePeopleTest extends TestCase {

    public function testBoatsToSavePeople() {
        $obj = new BoatsToSavePeople();
        //Test 1
        $want = 1;
        $got = $obj->numRescueBoats( [1,2], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->numRescueBoats( [3,2,2,1], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->numRescueBoats( [3,5,3,4], 5 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
