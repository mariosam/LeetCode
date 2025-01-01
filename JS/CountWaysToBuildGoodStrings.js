/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} low
 * @param {number} high
 * @param {number} zero
 * @param {number} one
 * @return {number}
 */
const MODULO = 1e9 + 7;

function countGoodStrings(low, high, zero, one) {
    const dp = new Array(high + 1).fill(0);
    dp[0] = 1;

    for (let end = 1; end <= high; end++) {
        if (end >= zero) {
            dp[end] = (dp[end] + dp[end - zero]) % MODULO;
        }
        if (end >= one) {
            dp[end] = (dp[end] + dp[end - one]) % MODULO;
        }
    }

    let result = 0;
    for (let i = low; i <= high; i++) {
        result = (result + dp[i]) % MODULO;
    }

    return result;
}
export { countGoodStrings }
