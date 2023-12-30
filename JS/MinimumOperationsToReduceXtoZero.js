/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} x
 * @return {number}
 */
function minOperations(nums, x) {
    x = -x;
    for (const v of nums) {
        x += v;
    }
    let ans = 1 << 30;
    let s = 0;
    const n = nums.length;
    let j = 0;

    for (let i = 0; i < n; i++) {
        s += nums[i];

        while (j <= i && s > x) {
            s -= nums[j];
            j++;
        }

        if (s === x) {
            ans = Math.min(ans, n - (i - j + 1));
        }
    }

    if (ans === 1 << 30) {
        return -1;
    }

    return ans;
}
export { minOperations }
