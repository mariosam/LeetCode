/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} k
 * @return {number[][]}
 */
function combine(n, k) {
    let res = [];
    let values = new Array(k).fill(0);
    let i = 0;

    while (i >= 0) {
        values[i]++;
        if (values[i] > n) {
            i--;
        } else if (i === k - 1) {
            let r = values.slice();
            res.push(r);
        } else {
            i++;
            values[i] = values[i - 1];
        }
    }
    
    return res;
}
export { combine }
