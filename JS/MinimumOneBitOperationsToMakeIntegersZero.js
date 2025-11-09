/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function minimumOneBitOperations(n) {
    let ans = 0;
    while (n > 0) {
        ans ^= n;
        n >>= 1;
    }
    return ans;
}
export { minimumOneBitOperations }
