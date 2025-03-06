/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function coloredCells(n) {
    if (n <= Number.MAX_SAFE_INTEGER) {
        return n * n + (n - 1) * (n - 1);
    } else {
        return BigInt(n) * BigInt(n) + BigInt(n - 1) * BigInt(n - 1);
    }
}
export { coloredCells }
