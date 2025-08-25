/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestSubarray(nums) {
    const n = nums.length;
    const left = new Array(n).fill(0);
    const right = new Array(n).fill(0);

    for (let i = 1; i < n; i++) {
        if (nums[i - 1] === 1) {
            left[i] = left[i - 1] + 1;
        }
    }

    for (let i = n - 2; i >= 0; i--) {
        if (nums[i + 1] === 1) {
            right[i] = right[i + 1] + 1;
        }
    }

    let ans = 0;
    for (let i = 0; i < n; i++) {
        ans = Math.max(ans, left[i] + right[i]);
    }

    return ans;
}
export { longestSubarray }
