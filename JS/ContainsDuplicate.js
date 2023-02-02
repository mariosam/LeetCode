/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function containsDuplicate(nums) {
    var ar = nums.filter((el, i) => nums.indexOf(el) === i);

    return nums.length != ar.length;
}
export { containsDuplicate }
