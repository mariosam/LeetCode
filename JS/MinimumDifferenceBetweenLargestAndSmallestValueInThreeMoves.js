/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minDifference(nums) {
    const n = nums.length;
    if (n < 5) {
        return 0;
    }
    nums.sort((a, b) => a - b);
    let ans = Number.MAX_SAFE_INTEGER;
    for (let l = 0; l <= 3; l++) {
        const r = 3 - l;
        ans = Math.min(ans, nums[n - 1 - r] - nums[l]);
    }
    return ans;
}
export { minDifference }
