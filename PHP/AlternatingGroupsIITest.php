<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AlternatingGroupsIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AlternatingGroupsII.php");

class AlternatingGroupsIITest extends TestCase {

    public function testAlternatingGroupsII() {
        $obj = new AlternatingGroupsII();
        //Test 1
        $want = 3;
        $got = $obj->numberOfAlternatingGroups( [0,1,0,1,0], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->numberOfAlternatingGroups( [0,1,0,0,1,0,1], 6 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->numberOfAlternatingGroups( [1,1,0,1], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
