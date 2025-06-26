/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} key
 * @param {number} k
 * @return {number[]}
 */
function findKDistantIndices(nums, key, k) {
    const ans = [];
    const keyIndices = [];

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] === key) {
            keyIndices.push(i);
        }
    }

    for (let i = 0; i < nums.length; i++) {
        for (let j = 0; j < keyIndices.length; j++) {
            if (Math.abs(i - keyIndices[j]) <= k) {
                ans.push(i);
                break;
            }
        }
    }

    ans.sort((a, b) => a - b);
    return ans;
}
export { findKDistantIndices }
