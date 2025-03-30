/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function minimumIndex(nums) {
    let freq = new Map();
    let x = nums[0];

    for (let num of nums) {
        freq.set(num, (freq.get(num) || 0) + 1);
        if (freq.get(num) > freq.get(x)) {
            x = num;
        }
    }

    let total = freq.get(x);
    let freq1 = 0;

    for (let i = 0; i < nums.length; i++) {
        if (nums[i] === x) {
            freq1++;
        }
        if (freq1 * 2 > i + 1 && (total - freq1) * 2 > (nums.length - i - 1)) {
            return i;
        }
    }

    return -1;
}
export { minimumIndex }
