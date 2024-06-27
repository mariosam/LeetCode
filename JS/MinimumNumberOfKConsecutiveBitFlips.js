/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
function minKBitFlips(nums, k) {
    const n = nums.length;
    const d = Array(n + 1).fill(0);
    let ans = 0;
    let s = 0;

    for (let i = 0; i < n; i++) {
        s += d[i];
        if (s % 2 === nums[i] % 2) {
            if (i + k > n) {
                return -1;
            }
            d[i]++;
            d[i + k]--;
            s++;
            ans++;
        }
    }
    return ans;
}
export { minKBitFlips }
