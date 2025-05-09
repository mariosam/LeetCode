/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function buildArray(nums) {
    const res = new Array(nums.length);
    for (let i = 0; i < nums.length; i++) {
        res[i] = nums[nums[i]];
    }
    return res;
}
export { buildArray }
