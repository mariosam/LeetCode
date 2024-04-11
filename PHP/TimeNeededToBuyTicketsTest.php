<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TimeNeededToBuyTicketsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TimeNeededToBuyTickets.php");

class TimeNeededToBuyTicketsTest extends TestCase {

    public function testTimeNeededToBuyTickets() {
        $obj = new TimeNeededToBuyTickets();
        //Test 1
        $want = 6;
        $got = $obj->timeRequiredToBuy( [2, 3, 2], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 8;
        $got = $obj->timeRequiredToBuy( [5, 1, 1, 1], 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
