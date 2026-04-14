/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @param {number} start
 * @return {number}
 */
function getMinDistance(nums, target, start) {
    const n = nums.length;

    for (let i = 0; start + i < n || start - i >= 0; i++) {
        if (start + i < n) {
            if (nums[start + i] === target) {
                return i;
            }
        }
        if (start - i >= 0) {
            if (nums[start - i] === target) {
                return i;
            }
        }
    }

    return -1;
}
export { getMinDistance }
