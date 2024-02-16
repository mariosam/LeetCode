/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function largestPerimeter(nums) {
    nums.sort((a, b) => a - b);
    const n = nums.length;
    const s = Array(n + 1).fill(0);

    for (let i = 1; i <= n; ++i) {
        s[i] = s[i - 1] + nums[i - 1];
    }

    let ans = -1;

    for (let k = 3; k <= n; ++k) {
        if (s[k - 1] > nums[k - 1]) {
            ans = Math.max(ans, s[k]);
        }
    }

    return ans;
}
export { largestPerimeter }
