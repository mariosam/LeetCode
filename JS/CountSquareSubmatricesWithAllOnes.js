/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} matrix
 * @return {number}
 */
function countSquares(matrix) {
    let m = matrix.length, n = matrix[0].length, ans = 0;
    let f = Array.from({ length: m }, () => Array(n).fill(0));

    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (matrix[i][j] === 0) continue;

            if (i === 0 || j === 0) {
                f[i][j] = 1;
            } else {
                f[i][j] = Math.min(f[i-1][j-1], Math.min(f[i-1][j], f[i][j-1])) + 1;
            }

            ans += f[i][j];
        }
    }
    return ans;
}
export { countSquares }
