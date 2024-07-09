/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} k
 * @return {number}
 */
function findTheWinner(n, k) {
    if (n === 1) {
        return 1;
    }
    let ans = (findTheWinner(n - 1, k) + k - 1) % n + 1;
    return ans;
}
export { findTheWinner }
