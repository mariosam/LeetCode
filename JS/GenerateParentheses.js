/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {string[]}
 */
function generateParenthesis(n) {
    const ans = [];
    let cur = '';

    const dfs = function(left, right) {
        if (left === 0 && right === 0) {
            ans.push(cur);
            return;
        }

        if (left > right) {
            return;
        }

        if (left > 0) {
            cur += '(';
            dfs(left - 1, right);
            cur = cur.slice(0, -1);
        }

        if (right > 0) {
            cur += ')';
            dfs(left, right - 1);
            cur = cur.slice(0, -1);
        }
    };
    dfs(n, n);

    return ans;
}
export { generateParenthesis }
