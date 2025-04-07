/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function largestDivisibleSubset(nums, k) {
    nums.sort((a, b) => a - b);
    const subset = Array(nums.length).fill(0).map((_, i) => [nums[i]]);
    let result = [];

    for (let i = 0; i < nums.length; i++) {
        for (let j = i - 1; j >= 0; j--) {
            if (subset[i].length > subset[j].length) continue;
            const satisfied = subset[j].every(k => k % nums[i] === 0 || nums[i] % k === 0);
            if (satisfied) {
                subset[i] = [nums[i], ...subset[j]];
            }
        }
        if (subset[i].length > result.length) {
            result = subset[i];
        }
    }

    return result;
}
export { largestDivisibleSubset }
