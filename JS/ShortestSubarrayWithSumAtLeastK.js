/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
function shortestSubarray(nums, k) {
    const n = nums.length;
    const s = Array(n + 1).fill(0);

    for (let i = 0; i < n; i++) {
        s[i + 1] = s[i] + nums[i];
    }

    const q = [];
    let ans = n + 1;

    for (let i = 0; i < s.length; i++) {
        while (q.length > 0 && s[i] - s[q[0]] >= k) {
            ans = Math.min(ans, i - q.shift());
        }
        while (q.length > 0 && s[q[q.length - 1]] >= s[i]) {
            q.pop();
        }
        q.push(i);
    }

    return ans > n ? -1 : ans;
}
export { shortestSubarray }
