/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function applyOperations(nums) {
    let n = nums.length;
    
    for (let i = 0; i < n - 1; i++) {
        if (nums[i] === nums[i + 1]) {
            nums[i] *= 2;
            nums[i + 1] = 0;
        }
    }

    let l = 0;
    for (let r = 0; r < n; r++) {
        if (nums[r] !== 0) {
            [nums[l], nums[r]] = [nums[r], nums[l]];
            l++;
        }
    }

    return nums;
}
export { applyOperations }
