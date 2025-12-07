/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function countPartitions(nums) {
    const n = nums.length;
    const p = Array(n).fill(0);

    p[0] = nums[0];
    for (let i = 1; i < n; i++) {
        p[i] = p[i - 1] + nums[i];
    }

    let res = 0;
    for (let i = 0; i < n - 1; i++) {
        if (((p[n - 1] - p[i]) - p[i]) % 2 === 0) {
            res++;
        }
    }
    return res;
}
export { countPartitions }
