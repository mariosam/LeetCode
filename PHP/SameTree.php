<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SameTree {    

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if ( $p == null && $q == null ) return true;
        if ( $p == null || $q == null ) return false;

        return ($p->val == $q->val) && $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }

}
