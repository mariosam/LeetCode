<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckIfGridCanBeCutIntoSectionsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckIfGridCanBeCutIntoSections.php");

class CheckIfGridCanBeCutIntoSectionsTest extends TestCase {

    public function testCheckIfGridCanBeCutIntoSections() {
        $obj = new CheckIfGridCanBeCutIntoSections();
        //Test 1
        $want = true;
        $got = $obj->checkValidCuts( 5, [[1,0,5,2],[0,2,2,4],[3,2,5,3],[0,4,4,5]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->checkValidCuts( 4, [[0,0,1,1],[2,0,3,4],[0,2,2,3],[3,0,4,3]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->checkValidCuts( 4, [[0,2,2,4],[1,0,3,2],[2,2,3,4],[3,0,4,2],[3,2,4,4]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
