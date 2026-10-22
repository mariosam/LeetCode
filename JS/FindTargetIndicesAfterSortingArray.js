/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
function targetIndices(nums, target) {
    nums.sort((a, b) => a - b);
    const ans = [];

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] === target) {
            ans.push(i);
        }
    }
    return ans;
}
export { targetIndices }
