<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit Dota2SenateTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Dota2Senate.php");

class Dota2SenateTest extends TestCase {

    public function testDota2Senate() {
        $obj = new Dota2Senate();
        //Test 1
        $want = "Radiant";
        $got = $obj->predictPartyVictory( "RD" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "Dire";
        $got = $obj->predictPartyVictory( "RDD" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
