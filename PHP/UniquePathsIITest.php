<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit UniquePathsIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("UniquePathsII.php");

class UniquePathsIITest extends TestCase {

    public function testUniquePathsII() {
        $obj = new UniquePathsII();
        //Test 1
        $want = 2;
        $got = $obj->uniquePathsWithObstacles( [[0,0,0], [0,1,0],[0,0,0]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->uniquePathsWithObstacles( [[0,1], [0,0]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
