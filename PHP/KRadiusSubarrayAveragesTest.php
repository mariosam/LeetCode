<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KRadiusSubarrayAveragesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KRadiusSubarrayAverages.php");

class KRadiusSubarrayAveragesTest extends TestCase {

    public function testKRadiusSubarrayAverages() {
        $obj = new KRadiusSubarrayAverages();
        //Test 1
        $want = [-1,-1,-1,5,4,4,-1,-1,-1];
        $got = $obj->getAverages( [7,4,3,9,1,8,5,2,6], 3 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [100000];
        $got = $obj->getAverages( [100000], 0 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [-1];
        $got = $obj->getAverages( [8], 100000 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
