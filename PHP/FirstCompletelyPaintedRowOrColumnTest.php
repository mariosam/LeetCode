<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FirstCompletelyPaintedRowOrColumnTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FirstCompletelyPaintedRowOrColumn.php");

class FirstCompletelyPaintedRowOrColumnTest extends TestCase {

    public function testFirstCompletelyPaintedRowOrColumn() {
        $obj = new FirstCompletelyPaintedRowOrColumn();
        //Test 1
        $want = 2;
        $got = $obj->firstCompleteIndex( [1,3,4,2], [[1,4],[2,3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->firstCompleteIndex( [2,8,7,4,1,3,5,6,9], [[3,2,5],[1,4,6],[8,7,9]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
