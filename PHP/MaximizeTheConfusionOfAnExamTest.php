<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximizeTheConfusionOfAnExamTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximizeTheConfusionOfAnExam.php");

class MaximizeTheConfusionOfAnExamTest extends TestCase {

    public function testMaximizeTheConfusionOfAnExam() {
        $obj = new MaximizeTheConfusionOfAnExam();
        //Test 1
        $want = 4;
        $got = $obj->maxConsecutiveAnswers( "TTFF", 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->maxConsecutiveAnswers( "TFFT", 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->maxConsecutiveAnswers( "TTFTTFTT", 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
