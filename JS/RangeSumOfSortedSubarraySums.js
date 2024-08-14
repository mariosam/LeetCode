/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} n
 * @param {number} left
 * @param {number} right
 * @return {number}
 */
function rangeSum(nums, n, left, right) {
    let arr = [];
    let k = 0;
    for (let i = 0; i < nums.length; i++) {
        arr[k++] = nums[i];
        let last = nums[i];
        for (let j = i + 1; j < nums.length; j++) {
            arr[k++] = last + nums[j];
            last = arr[k - 1];
        }
    }

    arr.sort((a, b) => a - b);
    let sum = 0;
    const mod = Math.pow(10, 9) + 7;

    for (let i = left - 1; i <= right - 1; i++) {
        sum = (sum + arr[i]) % mod;
    }

    return sum;
}
export { rangeSum }
