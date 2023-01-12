<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BinaryTreePreorderTraversal {    

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        $list = [];

        $this->helper( $root, $list );

        return $list;
    }

    function helper($node, &$list) {
        if ( $node == null ) return;

        array_push( $list, $node->val );
        
        $this->helper( $node->left, $list );
        $this->helper( $node->right, $list );
    }

}
