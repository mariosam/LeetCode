/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} maximumBit
 * @return {number[]}
 */
function getMaximumXor(nums, maximumBit) {
    const n = nums.length;
    const res = new Array(n).fill(0);
    const max = (1 << maximumBit) - 1;
    let v = 0;

    nums.forEach((x, i) => {
        v ^= x;
        res[n - 1 - i] = max ^ v;
    });

    return res;
};
export { getMaximumXor }
