<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheStringWithLCPTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheStringWithLCP.php");

class FindTheStringWithLCPTest extends TestCase {

    public function testFindTheStringWithLCP() {
        $obj = new FindTheStringWithLCP();
        //Test 1
        $want = "abab";
        $got = $obj->findTheString( [[4,0,2,0],[0,3,0,1],[2,0,2,0],[0,1,0,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "aaaa";
        $got = $obj->findTheString( [[4,3,2,1],[3,3,2,1],[2,2,2,1],[1,1,1,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "";
        $got = $obj->findTheString( [[4,3,2,1],[3,3,2,1],[2,2,2,1],[1,1,1,3]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
