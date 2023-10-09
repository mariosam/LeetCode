/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums1
 * @param {number[]} nums2
 * @return {number}
 */
function maxDotProduct(nums1, nums2) {
    const m = nums1.length;
    const n = nums2.length;
    const dp = Array.from(Array(m + 1), () => Array(n + 1).fill(Number.MIN_SAFE_INTEGER));
    
    for (let i = 1; i <= m; ++i) {
        for (let j = 1; j <= n; ++j) {
            dp[i][j] = Math.max(dp[i - 1][j], dp[i][j - 1]);
            dp[i][j] = Math.max(dp[i][j], Math.max(0, dp[i - 1][j - 1]) + nums1[i - 1] * nums2[j - 1]);
        }
    }
    
    return dp[m][n];
}
export { maxDotProduct }
