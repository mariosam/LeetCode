<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PlusOneTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PlusOne.php");

class PlusOneTest extends TestCase {

    public function testPlusOne() {
        $obj = new PlusOne();
        //Test 1
        $want = [1,2,4];
        $got = $obj->plusOne( [1,2,3] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [4,3,2,2];
        $got = $obj->plusOne( [4,3,2,1] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [1,0];
        $got = $obj->plusOne( [9] );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 4
        $want = [5,0,0,0];
        $got = $obj->plusOne( [4,9,9,9] );
        echo "\nTest 4: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 5
        $want = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7];
        $got = $obj->plusOne( [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6] );
        echo "\nTest 5: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 6
        $want = [1,0,0,0];
        $got = $obj->plusOne( [9,9,9] );
        echo "\nTest 6: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
