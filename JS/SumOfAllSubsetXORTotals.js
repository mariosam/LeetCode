/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function subsetXORSum(nums) {
    const n = nums.length;
    let ans = 0;

    for (let i = 0; i < (1 << n); ++i) {
        let s = 0;
        for (let j = 0; j < n; ++j) {
            if ((i >> j & 1) === 1) {
                s ^= nums[j];
            }
        }
        ans += s;
    }

    return ans;
};
export { subsetXORSum }
