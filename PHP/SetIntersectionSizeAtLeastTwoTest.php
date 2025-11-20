<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SetIntersectionSizeAtLeastTwoTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SetIntersectionSizeAtLeastTwo.php");

class SetIntersectionSizeAtLeastTwoTest extends TestCase {

    public function testSetIntersectionSizeAtLeastTwo() {
        $obj = new SetIntersectionSizeAtLeastTwo();
        //Test 1
        $want = 5;
        $got = $obj->intersectionSizeTwo( [[1,3],[3,7],[8,9]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->intersectionSizeTwo( [[1,3],[1,4],[2,5],[3,5]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->intersectionSizeTwo( [[1,2],[2,3],[2,4],[4,5]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
