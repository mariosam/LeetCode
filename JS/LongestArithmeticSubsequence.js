/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function longestArithSeqLength(nums) {
    const n = nums.length;
    const f = new Array(n);
    for (let i = 0; i < n; i++) {
        f[i] = new Array(1001).fill(0);
    }

    let ans = 0;
    for (let i = 1; i < n; i++) {
        for (let k = 0; k < i; k++) {
            const j = nums[i] - nums[k] + 500;
            f[i][j] = Math.max(f[i][j], f[k][j] + 1);
            ans = Math.max(ans, f[i][j]);
        }
    }
    
    return ans + 1;
}
export { longestArithSeqLength }
