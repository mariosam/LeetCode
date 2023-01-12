<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BinaryTreePreorderTraversalTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BinaryTreePreorderTraversal.php");
require ("TreeNode.php");

class BinaryTreePreorderTraversalTest extends TestCase {

    public function testBinaryTreePreorderTraversal() {
        $obj = new BinaryTreePreorderTraversal();
        //
        $tr3 = new TreeNode(3, null, null);
        $tr2 = new TreeNode(2, $tr3, null);
        //Test 1
        $want = [1, 2, 3];
        $got = $obj->preorderTraversal( new TreeNode(1, null, $tr2) );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [];
        $got = $obj->preorderTraversal( null );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [1];
        $got = $obj->preorderTraversal( new TreeNode(1, null, null) );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
