<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DefuseTheBombTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DefuseTheBomb.php");

class DefuseTheBombTest extends TestCase {

    public function testDefuseTheBomb() {
        $obj = new DefuseTheBomb();
        //Test 1
        $want = [12,10,16,13];
        $got = $obj->decrypt( [5,7,1,4], 3 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [0,0,0,0];
        $got = $obj->decrypt( [1,2,3,4], 0 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [12,5,6,13];
        $got = $obj->decrypt( [2,4,9,3], -2 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
