/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number[]}
 */
function getAverages(nums, k) {
    const n = nums.length;
    const s = new Array(n + 1).fill(0);

    for (let i = 0; i < n; ++i) {
        s[i + 1] = s[i] + nums[i];
    }

    const ans = new Array(n).fill(-1);

    for (let i = 0; i < n; ++i) {
        if (i - k >= 0 && i + k < n) {
            ans[i] = Math.floor((s[i + k + 1] - s[i - k]) / (k << 1 | 1));
        }
    }

    return ans;
}
export { getAverages }
