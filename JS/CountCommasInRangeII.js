/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function countCommas(n) {
    let ans = 0;

    for (let x = 1000; x <= n; x *= 1000) {
        ans += n - x + 1;
    }
    return ans;
}
export { countCommas }
