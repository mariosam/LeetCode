/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minimizeSum(nums) {
    nums.sort((a, b) => a - b);
    const n = nums.length;
    const highOfChangingTwoMins = nums[n - 1] - nums[2];
    const highOfChangingTwoMaxs = nums[n - 3] - nums[0];
    const highOfChangingMinAndMax = nums[n - 2] - nums[1];

    return Math.min(
        highOfChangingTwoMins,
        highOfChangingTwoMaxs,
        highOfChangingMinAndMax
    );
}
export { minimizeSum }
