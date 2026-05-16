/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function findMin(nums) {
    let min = nums[0];

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] < min) {
            return nums[i];
        }
    }

    return min;
}
export { findMin }
