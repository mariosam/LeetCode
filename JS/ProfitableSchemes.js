/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} minProfit
 * @param {number[]} group
 * @param {number[]} profit
 * @return {number}
 */
function profitableSchemes(n, minProfit, group, profit) {
    const dp = new Array(n + 1).fill(0).map(() => new Array(minProfit + 1).fill(0));
    for (let i = 0; i <= n; i++) dp[i][0] = 1;
    const len = group.length, MOD = 1e9 + 7;

    for (let i = 1; i <= len; i++) {
        const members = group[i - 1], earn = profit[i - 1];
        for (let j = n; j >= members; j--) {
            for (let k = minProfit; k >= 0; k--) {
                dp[j][k] = (dp[j][k] + dp[j - members][Math.max(0, k - earn)]) % MOD;
            }
        }
    }

    return dp[n][minProfit];
}
export { profitableSchemes }
