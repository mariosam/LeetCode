<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheDifferenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheDifference.php");

class FindTheDifferenceTest extends TestCase {

    public function testFindTheDifference() {
        $obj = new FindTheDifference();
        //Test 1
        $want = "e";
        $got = $obj->findTheDifference( "abcd", "abcde" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "y";
        $got = $obj->findTheDifference( "", "y" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
