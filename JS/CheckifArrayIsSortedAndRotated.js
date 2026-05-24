/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function check(nums) {
    let countOutOfOrder = 0;
    const n = nums.length;

    for (let i = 0; i < n; ++i) {
        if (nums[i] > nums[(i + 1) % n]) {
            ++countOutOfOrder;
        }
    }
    return countOutOfOrder <= 1;
}
export { check }
