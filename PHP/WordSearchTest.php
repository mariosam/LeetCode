<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit WordSearchTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("WordSearch.php");

class WordSearchTest extends TestCase {

    public function testWordSearch() {
        $obj = new WordSearch();
        //Test 1
        $want = true;
        $got = $obj->exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCCED" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "SEE" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->exist( [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCB" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
