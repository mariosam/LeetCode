<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ContainsDuplicateTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ContainsDuplicate.php");

class ContainsDuplicateTest extends TestCase {

    public function testContainsDuplicate() {
        $obj = new ContainsDuplicate();
        //Test 1
        $want = true;
        $got = $obj->containsDuplicate( [1,2,3,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->containsDuplicate( [1,2,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->containsDuplicate( [1,1,1,3,3,4,3,2,4,2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
