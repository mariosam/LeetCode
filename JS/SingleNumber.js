/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function singleNumber(nums) {
    return nums.reduce(function(x, y){ return x ^ y; });
}
export { singleNumber }
