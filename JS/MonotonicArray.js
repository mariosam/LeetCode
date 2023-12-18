/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function isMonotonic(nums) {
    let isIncr = false;
    let isDecr = false;
    for (let i = 1; i < nums.length; i++) {
        if (nums[i] < nums[i - 1]) {
            isIncr = true;
        } else if (nums[i] > nums[i - 1]) {
            isDecr = true;
        }
        if (isIncr && isDecr) {
            return false;
        }
    }
    return true;
}
export { isMonotonic }
