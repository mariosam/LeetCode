/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestSubsequence(nums) {
    let xor = 0;
    let cnt0 = 0;
    const n = nums.length;

    for (const x of nums) {
        xor ^= x;
        if (x === 0) {
            cnt0++;
        }
    }

    if (xor !== 0) {
        return n;
    }
    return cnt0 === n ? 0 : n - 1;
}
export { longestSubsequence }
