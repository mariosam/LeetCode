<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit GroupAnagramsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("GroupAnagrams.php");

class GroupAnagramsTest extends TestCase {

    public function testGroupAnagrams() {
        $obj = new GroupAnagrams();
        //Test 1
        $want = [["bat"],["nat","tan"],["ate","eat","tea"]];
        $got = $obj->groupAnagrams(["eat","tea","tan","ate","nat","bat"]);
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[""]];
        $got = $obj->groupAnagrams([""]);
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [["a"]];
        $got = $obj->groupAnagrams(["a"]);
        echo "\nTest 3: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
