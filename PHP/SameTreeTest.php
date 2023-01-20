<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SameTreeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SameTree.php");
require ("TreeNode.php");

class SameTreeTest extends TestCase {

    public function testSameTree() {
        $obj = new SameTree();
        //
        $tr3 = new TreeNode(3, null, null);
        $tr2 = new TreeNode(2, $tr3, null);
        //Test 1
        $want = true;
        $got = $obj->isSameTree( new TreeNode(1, null, $tr2), new TreeNode(1, null, $tr2) );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isSameTree( null, new TreeNode(1, null, $tr2) );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = false;
        $got = $obj->isSameTree( new TreeNode(1, null, $tr2), new TreeNode(1, null, null) );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
