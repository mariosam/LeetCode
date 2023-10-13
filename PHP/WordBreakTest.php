<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit WordBreakTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("WordBreak.php");

class WordBreakTest extends TestCase {

    public function testWordBreak() {
        $obj = new WordBreak();
        //Test 1
        $want = true;
        $got = $obj->wordBreak( "leetcode", ["leet","code"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = true;
        $got = $obj->wordBreak( "applepenapple", ["apple","pen"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->wordBreak( "catsandog", ["cats","dog","sand","and","cat"] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
