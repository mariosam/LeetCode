/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestSubarray(nums) {
    let n = nums.length;

    let max = nums[0];
    for (let i = 0; i < n; i++) {
        max = Math.max(max, nums[i]);
    }

    let res = 0;
    let curLen = 0;
    for (let i = 0; i < n; i++) {
        if (nums[i] === max) {
            curLen++;
        } else {
            curLen = 0;
        }
        res = Math.max(res, curLen);
    }
    return res;
}
export { longestSubarray }
