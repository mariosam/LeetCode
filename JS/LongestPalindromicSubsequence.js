/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function longestPalindromeSubseq(s) {
    let dp = new Array(s.length).fill(0).map(() => new Array(s.length).fill(0));

    for (let i = s.length - 1; i >= 0; i--) {
        dp[i][i] = 1;
        for (let j = i + 1; j < s.length; j++) {
            if (s[i] === s[j]) {
                dp[i][j] = dp[i + 1][j - 1] + 2;
            } else {
                dp[i][j] = Math.max(dp[i + 1][j], dp[i][j - 1]);
            }
        }
    }

    return dp[0][s.length - 1];
}
export { longestPalindromeSubseq }
