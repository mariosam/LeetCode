<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ValidateStackSequencesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ValidateStackSequences.php");

class ValidateStackSequencesTest extends TestCase {

    public function testValidateStackSequences() {
        $obj = new ValidateStackSequences();
        //Test 1
        $want = true;
        $got = $obj->validateStackSequences( [1,2,3,4,5], [4,5,3,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->validateStackSequences( [1,2,3,4,5], [4,3,5,1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
