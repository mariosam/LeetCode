/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function countHillValley(nums) {
    let left = nums[0];
    let count = 0;

    for (let i = 1; i < nums.length - 1; i++) {
        if ((left < nums[i] && nums[i] > nums[i + 1]) ||
            (left > nums[i] && nums[i] < nums[i + 1])) {
            count++;
            left = nums[i];
        }
    }
    return count;
}
export { countHillValley }
