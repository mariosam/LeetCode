<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckCompletenessOfBinaryTree {    

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isCompleteTree($root) {
        $queue = [$root];
        $isStop = false;

        while (!empty($queue)) {
            $node = array_shift($queue);

            if ($node === null) {
                $isStop = true;
                continue;
            }

            if ($isStop) {
                return false;
            }

            $queue[] = $node->left;
            $queue[] = $node->right;
        }

        return true;
    }

}
