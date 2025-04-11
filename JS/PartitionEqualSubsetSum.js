/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function canPartition(nums) {
    const l = nums.length;
    if (l <= 1) return false;

    let sum = nums.reduce((a, b) => a + b, 0);
    if (sum % 2 !== 0) return false;

    sum = sum >> 1;
    const dp = new Array(sum + 1).fill(0);

    for (const num of nums) {
        for (let j = sum; j >= num; j--) {
            dp[j] = Math.max(dp[j], dp[j - num] + num);
        }
        if (dp[sum] === sum) return true;
    }

    return false;
}
export { canPartition }
