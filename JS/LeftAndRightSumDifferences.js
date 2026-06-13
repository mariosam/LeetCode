/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function leftRightDifference(nums) {
    let l = 0;
    let r = 0;

    for (const x of nums) {
        r += x;
    }
    const ans = new Array(nums.length);

    for (let i = 0; i < nums.length; i++) {
        const x = nums[i];
        r -= x;
        ans[i] = Math.abs(l - r);
        l += x;
    }
    return ans;
}
export { leftRightDifference }
