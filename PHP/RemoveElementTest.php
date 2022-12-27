<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveElementTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveElement.php");

class RemoveElementTest extends TestCase {

    public function testRemoveElement() {
        $obj = new RemoveElement();
        //Test 1
        $want = 2;
        $got = $obj->removeElement( [3,2,2,3], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->removeElement( [0,1,2,2,3,0,4,2], 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
