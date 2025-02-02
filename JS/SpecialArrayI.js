/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function isArraySpecial(nums) {
    for (let i = 1; i < nums.length; i++) {
        if (Math.abs(nums[i] - nums[i - 1]) % 2 === 0) {
            return false;
        }
    }
    return true;
};
export { isArraySpecial }
