/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number[][]}
 */
function constructProductMatrix(grid) {
    const MOD = 12345;
    const m = grid.length;
    const n = grid[0].length;

    const ans = Array.from({ length: m }, () => Array(n).fill(0));

    const prefix = [1];
    let suffix = 1;

    // prefix
    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            prefix.push((prefix[prefix.length - 1] * grid[i][j]) % MOD);
        }
    }

    // suffix + answer
    for (let i = m - 1; i >= 0; i--) {
        for (let j = n - 1; j >= 0; j--) {
            let idx = i * n + j;
            ans[i][j] = (prefix[idx] * suffix) % MOD;
            suffix = (suffix * grid[i][j]) % MOD;
        }
    }

    return ans;
}
export { constructProductMatrix }
