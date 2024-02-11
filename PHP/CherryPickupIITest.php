<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CherryPickupIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CherryPickupII.php");

class CherryPickupIITest extends TestCase {

    public function testCherryPickupII() {
        $obj = new CherryPickupII();
        //Test 1
        $want = 24;
        $got = $obj->cherryPickup( [[3,1,1],[2,5,1],[1,5,5],[2,1,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 28;
        $got = $obj->cherryPickup( [[1,0,0,0,0,0,1],[2,0,0,0,0,3,0],[2,0,9,0,0,0,0],[0,3,0,5,4,0,0],[1,0,2,3,0,0,6]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
