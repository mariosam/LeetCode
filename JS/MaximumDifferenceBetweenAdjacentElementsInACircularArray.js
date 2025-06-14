/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maxAdjacentDistance(nums) {
    const n = nums.length;
    let ans = Math.abs(nums[0] - nums[n - 1]);

    for (let i = 1; i < n; i++) {
        ans = Math.max(ans, Math.abs(nums[i] - nums[i - 1]));
    }

    return ans;
}
export { maxAdjacentDistance }
