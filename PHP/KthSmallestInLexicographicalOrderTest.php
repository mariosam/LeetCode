<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KthSmallestInLexicographicalOrderTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KthSmallestInLexicographicalOrder.php");

class KthSmallestInLexicographicalOrderTest extends TestCase {

    public function testKthSmallestInLexicographicalOrder() {
        $obj = new KthSmallestInLexicographicalOrder();
        //Test 1
        $want = 10;
        $got = $obj->findKthNumber( 13, 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->findKthNumber( 1, 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
