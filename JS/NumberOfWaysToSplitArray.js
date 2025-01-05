/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function waysToSplitArray(nums) {
    const n = nums.length;

    let sum = 0n; // Use BigInt for safe integer arithmetic
    for (const num of nums) {
        sum += BigInt(num);
    }

    let presum = 0n;
    let res = 0;
    for (let i = 0; i < n; i++) {
        presum += BigInt(nums[i]);
        if (i < n - 1 && presum >= sum - presum) {
            res++;
        }
    }
    return res;
}
export { waysToSplitArray }
