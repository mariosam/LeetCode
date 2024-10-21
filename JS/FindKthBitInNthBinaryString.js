/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} k
 * @return {character}
 */
function findKthBit(n, k) {
    function dfs(n, k) {
        if (k === 1) return 0;
        if ((k & (k - 1)) === 0) return 1;
        const m = 1 << n;
        if (k * 2 < m - 1) {
            return dfs(n - 1, k);
        } else {
            return dfs(n - 1, m - k) ^ 1;
        }
    }
    return String.fromCharCode('0'.charCodeAt(0) + dfs(n, k));
}
export { findKthBit }
