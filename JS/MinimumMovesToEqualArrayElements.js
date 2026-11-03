/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minMoves(nums) {
    if (nums.length === 0) {
        return 0;
    }
    nums.sort((a, b) => a - b);
    const minNum = nums[0];
    let ans = 0;

    for (const num of nums) {
        ans += num - minNum;
    }
    return ans;
}
export { minMoves }
