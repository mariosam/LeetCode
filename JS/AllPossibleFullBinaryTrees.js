/**
 * Definition for a binary tree node.
 * function TreeNode(val, left, right) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.left = (left===undefined ? null : left)
 *     this.right = (right===undefined ? null : right)
 * }
 */
/**
 * @param {number} n
 * @return {TreeNode[]}
 */
var allPossibleFBT = function(n) {
    const f = new Array(n + 1).fill().map(() => []);

    function dfs(n) {
        if (f[n].length > 0) {
            return f[n];
        }

        if (n === 1) {
            return [new TreeNode(0)];
        }

        const ans = [];
        for (let i = 0; i < n - 1; i++) {
            const j = n - 1 - i;
            for (const left of dfs(i)) {
                for (const right of dfs(j)) {
                    ans.push(new TreeNode(0));
                    ans[ans.length - 1].left = left;
                    ans[ans.length - 1].right = right;
                }
            }
        }

        f[n] = ans;
        return ans;
    }

    return dfs(n);
};
