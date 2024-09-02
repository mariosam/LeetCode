<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheStudentThatWillReplaceTheChalkTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheStudentThatWillReplaceTheChalk.php");

class FindTheStudentThatWillReplaceTheChalkTest extends TestCase {

    public function testFindTheStudentThatWillReplaceTheChalk() {
        $obj = new FindTheStudentThatWillReplaceTheChalk();
        //Test 1
        $want = 0;
        $got = $obj->chalkReplacer( [5,1,5], 22 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->chalkReplacer( [3,4,1,2], 25 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
