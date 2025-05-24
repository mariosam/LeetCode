<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindWordsContainingCharacterTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindWordsContainingCharacter.php");

class FindWordsContainingCharacterTest extends TestCase {

    public function testFindWordsContainingCharacter() {
        $obj = new FindWordsContainingCharacter();
        //Test 1
        $want = [0,1];
        $got = $obj->findWordsContaining( ["leet","code"], "e" );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [0,2];
        $got = $obj->findWordsContaining( ["abc","bcd","aaaa","cbc"], "a" );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [];
        $got = $obj->findWordsContaining( ["abc","bcd","aaaa","cbc"], "z" );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
