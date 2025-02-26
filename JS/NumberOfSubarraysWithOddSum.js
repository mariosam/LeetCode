/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {number}
 */
function numOfSubarrays(arr) {
    let cnt_even = 1, cnt_odd = 0, prefix = 0, res = 0;
    const MOD = 1_000_000_007;

    for (let a of arr) {
        prefix += a;
        if (prefix % 2 === 0) {
            res = (res + cnt_odd) % MOD;
            cnt_even += 1;
        } else {
            res = (res + cnt_even) % MOD;
            cnt_odd += 1;
        }
    }
    return res;
}
export { numOfSubarrays }
