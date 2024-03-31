/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function sortedSquares(nums) {
    const n = nums.length;
    const res = new Array(n);
    let i = 0, j = n - 1, k = n - 1;
    while (i <= j) {
        if (nums[i] * nums[i] > nums[j] * nums[j]) {
            res[k] = nums[i] * nums[i];
            i++;
        } else {
            res[k] = nums[j] * nums[j];
            j--;
        }
        k--;
    }
    return res;
}
export { sortedSquares }
