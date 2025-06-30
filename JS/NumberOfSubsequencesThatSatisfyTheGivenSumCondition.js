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
function numSubseq(nums, target) {
    nums.sort((a, b) => a - b);
    const mod = 1e9 + 7;
    const n = nums.length;

    const pows = Array(n + 1).fill(1);
    for (let i = 1; i <= n; i++) {
        pows[i] = (pows[i - 1] * 2) % mod;
    }

    let answer = 0;
    let right = n - 1;

    for (let left = 0; left < n; left++) {
        while (right >= left && nums[left] + nums[right] > target) {
            right--;
        }
        if (left <= right) {
            answer = (answer + pows[right - left]) % mod;
        }
    }

    return answer;
}
export { numSubseq }
