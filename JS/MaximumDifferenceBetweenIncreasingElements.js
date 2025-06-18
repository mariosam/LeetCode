/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maximumDifference(nums) {
    let ans = -1;
    let mn = nums[0];

    for (let i = 1; i < nums.length; i++) {
        if (nums[i] > mn) {
            ans = Math.max(ans, nums[i] - mn);
        }
        mn = Math.min(mn, nums[i]);
    }

    return ans;
}
export { maximumDifference }
