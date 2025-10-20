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
function maxDistinctElements(nums, k) {
    nums.sort((a, b) => a - b);
    let ans = 0;
    let pre = -Infinity;

    for (let x of nums) {
        let cur = Math.min(x + k, Math.max(x - k, pre + 1));
        if (cur > pre) {
            ans++;
            pre = cur;
        }
    }
    return ans;
};
export { maxDistinctElements }
