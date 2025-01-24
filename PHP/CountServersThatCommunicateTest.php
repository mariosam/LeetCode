<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountServersThatCommunicateTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountServersThatCommunicate.php");

class CountServersThatCommunicateTest extends TestCase {

    public function testCountServersThatCommunicate() {
        $obj = new CountServersThatCommunicate();
        //Test 1
        $want = 0;
        $got = $obj->countServers( [[1,0],[0,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->countServers( [[1,0],[1,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->countServers( [[1,1,0,0],[0,0,1,0],[0,0,1,0],[0,0,0,1]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
