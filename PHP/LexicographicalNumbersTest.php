<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LexicographicalNumbersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LexicographicalNumbers.php");

class LexicographicalNumbersTest extends TestCase {

    public function testLexicographicalNumbers() {
        $obj = new LexicographicalNumbers();
        //Test 1
        $want = [1,10,11,12,13,2,3,4,5,6,7,8,9];
        $got = $obj->lexicalOrder( 13 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1,2];
        $got = $obj->lexicalOrder( 2 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
