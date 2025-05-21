/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number[][]} queries
 * @return {number}
 */
function isZeroArray(nums, queries) {
    const n = nums.length;
    const d = new Array(n + 1).fill(0);

    for (const [l, r] of queries) {
        d[l]++;
        if (r + 1 < d.length) {
            d[r + 1]--;
        }
    }

    let s = 0;
    for (let i = 0; i < n; i++) {
        s += d[i];
        if (nums[i] > s) {
            return false;
        }
    }

    return true;
};
export { isZeroArray }
