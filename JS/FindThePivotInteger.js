/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function pivotInteger(n) {
    for (let x = 1; x <= n; ++x) {
        if ((1 + x) * x === (x + n) * (n - x + 1)) {
            return x;
        }
    }
    return -1;
}
export { pivotInteger }
