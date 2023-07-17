/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @param {number} difference
 * @return {number}
 */
function longestSubsequence(arr, difference) {
    const dp = new Map();
    let ans = 1;
    
    for (const num of arr) {
        dp.set(num, (dp.get(num - difference) || 0) + 1);
        ans = Math.max(ans, dp.get(num));
    }

    return ans;
}
export { longestSubsequence }
