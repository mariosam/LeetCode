/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function concatenatedBinary(n) {
    const MOD = 1000000007;
    let result = 0;

    for (let i = 1; i <= n; i++) {
        const binary = i.toString(2);

        for (let j = 0; j < binary.length; j++) {
            result = (result * 2 + (binary[j] - '0')) % MOD;
        }
    }

    return result;
}
export { concatenatedBinary }
