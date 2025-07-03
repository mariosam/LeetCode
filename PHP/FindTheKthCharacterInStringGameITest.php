<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheKthCharacterInStringGameITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheKthCharacterInStringGameI.php");

class FindTheKthCharacterInStringGameITest extends TestCase {

    public function testFindTheKthCharacterInStringGameI() {
        $obj = new FindTheKthCharacterInStringGameI();
        //Test 1
        $want = "b";
        $got = $obj->kthCharacter(5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "c";
        $got = $obj->kthCharacter( 10 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
