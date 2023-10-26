/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
function search(nums, target) {
    let left = 0, right = nums.length - 1;
    while (left < right) {
        let mid = (right + left) >>> 1;
        if (nums[mid] >= nums[0] && (target > nums[mid] || target < nums[0])) {
            left = mid + 1;
        } else if (target > nums[mid] && target < nums[0]) {
            left = mid + 1;
        } else {
            right = mid;
        }
    }
    return left === right && nums[left] === target ? left : -1;
}
export { search }
