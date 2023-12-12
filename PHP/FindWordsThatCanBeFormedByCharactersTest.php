<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindWordsThatCanBeFormedByCharactersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindWordsThatCanBeFormedByCharacters.php");

class FindWordsThatCanBeFormedByCharactersTest extends TestCase {

    public function testFindWordsThatCanBeFormedByCharacters() {
        $obj = new FindWordsThatCanBeFormedByCharacters();
        //Test 1
        $want = 6;
        $got = $obj->countCharacters( ["cat","bt","hat","tree"], "atach" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->countCharacters( ["hello","world","leetcode"], "welldonehoneyr" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
