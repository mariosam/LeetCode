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
function minOperations(nums, k) {
    let xorSum = k;
    for (let x of nums) {
        xorSum ^= x;
    }
    return xorSum.toString(2).split('1').length - 1;
}
export { minOperations }
