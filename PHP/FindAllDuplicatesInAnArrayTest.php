<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindAllDuplicatesInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindAllDuplicatesInAnArray.php");

class FindAllDuplicatesInAnArrayTest extends TestCase {

    public function testFindAllDuplicatesInAnArray() {
        $obj = new FindAllDuplicatesInAnArray();
        //Test 1
        $want = [3,2];
        $got = $obj->findDuplicates( [4,3,2,7,8,2,3,1] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1];
        $got = $obj->findDuplicates( [1,1,2] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [];
        $got = $obj->findDuplicates( [1] );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
