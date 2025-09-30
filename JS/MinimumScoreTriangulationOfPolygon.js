/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} values
 * @return {number}
 */
function minScoreTriangulation(values) {
    const n = values.length;
    const dp = Array.from({ length: n }, () => Array(n).fill(0));

    for (let i = n - 3; i >= 0; i--) {
        for (let j = i + 2; j < n; j++) {
            dp[i][j] = Infinity;
            for (let k = i + 1; k < j; k++) {
                dp[i][j] = Math.min(
                    dp[i][j],
                    dp[i][k] + dp[k][j] + values[i] * values[j] * values[k]
                );
            }
        }
    }
    return dp[0][n - 1];
}
export { minScoreTriangulation }
