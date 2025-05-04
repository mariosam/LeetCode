<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfEquivalentDominoPairsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfEquivalentDominoPairs.php");

class NumberOfEquivalentDominoPairsTest extends TestCase {

    public function testNumberOfEquivalentDominoPairs() {
        $obj = new NumberOfEquivalentDominoPairs();
        //Test 1
        $want = 1;
        $got = $obj->numEquivDominoPairs( [[1,2],[2,1],[3,4],[5,6]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->numEquivDominoPairs( [[1,2],[1,2],[1,1],[1,2],[2,2]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
