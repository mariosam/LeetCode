<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindChampionIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindChampionII.php");

class FindChampionIITest extends TestCase {

    public function testFindChampionII() {
        $obj = new FindChampionII();
        //Test 1
        $want = 0;
        $got = $obj->findChampion( 3, [[0,1],[1,2]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->findChampion( 4, [[0,2],[1,3],[1,2]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
