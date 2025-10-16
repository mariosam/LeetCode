/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function maxIncreasingSubarrays(nums) {
    let ans = 0, pre = 0, cur = 0;
    const n = nums.length;

    for (let i = 0; i < n; ++i) {
        ++cur;
        if (i === n - 1 || nums[i] >= nums[i + 1]) {
            ans = Math.max(ans, Math.max(Math.floor(cur / 2), Math.min(pre, cur)));
            pre = cur;
            cur = 0;
        }
    }
    return ans;
}
export { maxIncreasingSubarrays }
