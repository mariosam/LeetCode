/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @return {number}
 */
function findNumbers(nums) {
    nums.sort((a, b) => a - b);
    let cnt = 0;
    let base = 10;
    let flag = false;

    for (const n of nums) {
        while (n >= base) {
            base *= 10;
            flag = !flag;
        }
        if (flag) {
            cnt++;
        }
    }
    return cnt;
}
export { findNumbers }
