<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindMissingElementsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindMissingElements.php");

class FindMissingElementsTest extends TestCase {

    public function testFindMissingElements() {
        $obj = new FindMissingElements();
        //Test 1
        $want = [3];
        $got = $obj->findMissingElements([1,4,2,5]);
        echo "\nTest 1: retornou " . implode(',', $got) . " == esperado: " . implode(',', $want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [];
        $got = $obj->findMissingElements([7,8,6,9]);
        echo "\nTest 2: retornou " . implode(',', $got) . " == esperado: " . implode(',', $want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [2,3,4];
        $got = $obj->findMissingElements([5,1]);
        echo "\nTest 3: retornou " . implode(',', $got) . " == esperado: " . implode(',', $want);
        $this->assertEquals($want, $got);
    }
}
