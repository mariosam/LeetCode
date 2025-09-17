<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReplaceNonCoprimeNumbersInArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReplaceNonCoprimeNumbersInArray.php");

class ReplaceNonCoprimeNumbersInArrayTest extends TestCase {

    public function testReplaceNonCoprimeNumbersInArray() {
        $obj = new ReplaceNonCoprimeNumbersInArray();
        //Test 1
        $want = [12,7,6];
        $got = $obj->replaceNonCoprimes( [6,4,3,2,7,6,2] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [2,1,1,3];
        $got = $obj->replaceNonCoprimes([2,2,1,1,3,3,3]);
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
