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
function numberOfSubarrays(nums, k) {
    const n = nums.length;
    const s = Array(n + 1).fill(0);
    const cnt = Array(n + 1).fill(0);
    let ans = 0;
    
    cnt[s[0]]++;
    for (let i = 1; i <= n; i++) {
        s[i] = s[i - 1] + nums[i - 1] % 2;
        cnt[s[i]]++;
    }
    
    for (let i = 1; i <= n; i++) {
        if (s[i] >= k) {
            ans += cnt[s[i] - k];
        }
    }

    return ans;
}
export { numberOfSubarrays }
