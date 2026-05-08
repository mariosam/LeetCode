/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number[]}
 */
function maxValue(nums) {
   const n = nums.length;
    if (n === 0) {
        return [];
    }

    const res = new Array(n).fill(0);
    const leftmax = new Array(n);
    leftmax[0] = nums[0];

    for (let i = 1; i < n; i++) {
        leftmax[i] = Math.max(leftmax[i - 1], nums[i]);
    }

    const rightmin = new Array(n);
    rightmin[n - 1] = nums[n - 1];

    for (let k = n - 2; k >= 0; k--) {
        rightmin[k] = Math.min(rightmin[k + 1], nums[k]);
    }

    res[n - 1] = leftmax[n - 1];

    for (let i = n - 2; i >= 0; i--) {
        res[i] = leftmax[i];
        if (leftmax[i] > rightmin[i + 1]) {
            res[i] = res[i + 1];
        }
    }

    return res;
}
export { maxValue }
