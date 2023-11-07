<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheDuplicateNumberTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheDuplicateNumber.php");

class FindTheDuplicateNumberTest extends TestCase {

    public function testFindTheDuplicateNumber() {
        $obj = new FindTheDuplicateNumber();
        //Test 1
        $want = 2;
        $got = $obj->findDuplicate( [1,3,4,2,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->findDuplicate( [3,1,3,4,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
