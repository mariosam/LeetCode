<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MirrorDistanceOfAnIntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MirrorDistanceOfAnInteger.php");

class MirrorDistanceOfAnIntegerTest extends TestCase {

    public function testMirrorDistance() {
        $obj = new MirrorDistanceOfAnInteger();
        //Test 1
        $want = 27;
        $got = $obj->mirror_distance(25);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->mirror_distance(10);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->mirror_distance(7);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
