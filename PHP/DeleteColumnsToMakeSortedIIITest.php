<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DeleteColumnsToMakeSortedIIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DeleteColumnsToMakeSortedIII.php");

class DeleteColumnsToMakeSortedIIITest extends TestCase {

    public function testDeleteColumnsToMakeSortedIII() {
        $obj = new DeleteColumnsToMakeSortedIII();
        //Test 1
        $want = 3;
        $got = $obj->minDeletionSize( ["babca","bbazb"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->minDeletionSize( ["edcba"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minDeletionSize( ["ghi","def","abc"] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
