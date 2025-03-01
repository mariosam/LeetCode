<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ApplyOperationstoAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ApplyOperationstoAnArray.php");

class ApplyOperationstoAnArrayTest extends TestCase {

    public function testApplyOperationstoAnArray() {
        $obj = new ApplyOperationstoAnArray();
        //Test 1
        $want = [1,4,2,0,0,0];
        $got = $obj->applyOperations( [1,2,2,1,1,0] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1,0];
        $got = $obj->applyOperations( [0,1] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
