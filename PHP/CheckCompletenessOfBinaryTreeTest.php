<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CheckCompletenessOfBinaryTreeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CheckCompletenessOfBinaryTree.php");

class CheckCompletenessOfBinaryTreeTest extends TestCase {

    public function testCheckCompletenessOfBinaryTree() {
        $obj = new CheckCompletenessOfBinaryTree();
        //Test 1
        $want = true;
        $got = $obj->isCompleteTree( [1,2,3,4,5,6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isCompleteTree( [1,2,3,4,5,null,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
