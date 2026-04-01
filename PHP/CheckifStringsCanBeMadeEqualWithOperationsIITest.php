<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckifStringsCanBeMadeEqualWithOperationsIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckifStringsCanBeMadeEqualWithOperationsII.php");

class CheckifStringsCanBeMadeEqualWithOperationsIITest extends TestCase {

    public function testCheckifStringsCanBeMadeEqualWithOperationsII() {
        $obj = new CheckifStringsCanBeMadeEqualWithOperationsII();
        //Test 1
        $want = true;
        $got = $obj->checkStrings( "abcdba", "cabdab" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->checkStrings( "abe", "bea" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
