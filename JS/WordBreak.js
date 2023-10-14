/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string[]} wordDict
 * @return {boolean}
 */
function wordBreak(s, wordDict) {
    const sLen = s.length;
    const dp = new Array(sLen + 1).fill(false);
    dp[0] = true;

    for (let i = 1; i <= sLen; i++) {
        for (const word of wordDict) {
            const l = word.length;
            if (l <= i && word === s.substring(i - l, i)) {
                dp[i] = dp[i - l] || dp[i];
            }
        }
    }

    return dp[sLen];
}
export { wordBreak }
