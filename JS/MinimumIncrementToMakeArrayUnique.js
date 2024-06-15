/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minIncrementForUnique(nums) {
    nums.sort((a, b) => a - b);
    let ans = 0;
    for (let i = 1; i < nums.length; ++i) {
        if (nums[i] <= nums[i - 1]) {
            let d = nums[i - 1] - nums[i] + 1;
            nums[i] += d;
            ans += d;
        }
    }
    return ans;
}
export { minIncrementForUnique }
