<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumMatchingOfPlayersWithTrainersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumMatchingOfPlayersWithTrainers.php");

class MaximumMatchingOfPlayersWithTrainersTest extends TestCase {

    public function testMaximumMatchingOfPlayersWithTrainers() {
        $obj = new MaximumMatchingOfPlayersWithTrainers();
        //Test 1
        $want = 2;
        $got = $obj->matchPlayersAndTrainers( [4,7,9], [8,2,5,8] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->matchPlayersAndTrainers( [1,1,1], [10] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
