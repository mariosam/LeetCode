<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountOfMatchesInTournamentTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountOfMatchesInTournament.php");

class CountOfMatchesInTournamentTest extends TestCase {

    public function testCountOfMatchesInTournament() {
        $obj = new CountOfMatchesInTournament();
        //Test 1
        $want = 6;
        $got = $obj->numberOfMatches( 7 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 13;
        $got = $obj->numberOfMatches( 14 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
