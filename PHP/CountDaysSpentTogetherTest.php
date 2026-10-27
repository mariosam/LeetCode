<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountDaysSpentTogetherTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountDaysSpentTogether.php");

class CountDaysSpentTogetherTest extends TestCase {

    public function testCountDaysSpentTogether() {
        $obj = new CountDaysSpentTogether();
        //Test 1
        $want = 3;
        $got = $obj->countDaysTogether( "08-15", "08-18", "08-16", "08-19" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countDaysTogether( "10-01", "10-31", "11-01", "12-31" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
