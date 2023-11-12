/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {boolean}
 */
function find132pattern(nums) {
    let vk = -(1 << 30);
    let stack = [];

    for (let i = nums.length - 1; i >= 0; i--) {
        if (nums[i] < vk) {
            return true;
        }

        while (stack.length > 0 && stack[stack.length - 1] < nums[i]) {
            vk = stack.pop();
        }

        stack.push(nums[i]);
    }

    return false;
}
export { find132pattern }
