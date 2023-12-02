/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param Integer $n
     * @return TreeNode[]
     */
    function allPossibleFBT($n) {
      $f = array_fill(0, $n + 1, []);
    
    	return $this->dfs($n, $f);
    }

		function dfs($n, &$f) {
			if (!empty($f[$n])) {
					return $f[$n];
			}

			if ($n === 1) {
					return [new TreeNode(0)];
			}

			$ans = [];
			for ($i = 0; $i < $n - 1; $i++) {
					$j = $n - 1 - $i;
					foreach ($this->dfs($i, $f) as $left) {
							foreach ($this->dfs($j, $f) as $right) {
									$node = new TreeNode(0);
									$node->left = $left;
									$node->right = $right;
									$ans[] = $node;
							}
					}
			}

			$f[$n] = $ans;
			return $ans;
	}
}
