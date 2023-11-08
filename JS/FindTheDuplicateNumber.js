/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function findDuplicate(nums) {
    let left = 1;
    let right = nums.length - 1;

    while (left < right) {
        const mid = left + ((right - left) >> 1);

        let count = 0;
        for (const num of nums) {
            if (num <= mid) {
                count++;
            }
        }

        if (count > mid) {
            right = mid;
        } else {
            left = mid + 1;
        }
    }

    return left;
}
export { findDuplicate }
