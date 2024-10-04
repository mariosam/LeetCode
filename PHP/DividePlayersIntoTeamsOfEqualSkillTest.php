<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DividePlayersIntoTeamsOfEqualSkillTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DividePlayersIntoTeamsOfEqualSkill.php");

class DividePlayersIntoTeamsOfEqualSkillTest extends TestCase {

    public function testDividePlayersIntoTeamsOfEqualSkill() {
        $obj = new DividePlayersIntoTeamsOfEqualSkill();
        //Test 1
        $want = 22;
        $got = $obj->dividePlayers( [3,2,5,1,3,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->dividePlayers( [3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->dividePlayers( [1,1,2,3] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
