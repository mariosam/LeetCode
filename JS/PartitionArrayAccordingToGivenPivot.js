/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} pivot
 * @return {number[]}
 */
function pivotArray(nums, pivot) {
    const res = new Array(nums.length);
    let k = 0;

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] < pivot) {
            res[k++] = nums[i];
        }
    }

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] === pivot) {
            res[k++] = nums[i];
        }
    }

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] > pivot) {
            res[k++] = nums[i];
        }
    }
    return res;
}
export { pivotArray }
