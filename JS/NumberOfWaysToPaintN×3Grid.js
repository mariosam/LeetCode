/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function numOfWays(n) {
    const mod = 1000000007;
    let aba = 6, abc = 6;

    for (let i = 0; i < n - 1; i++) {
        const tAba = (aba * 3 + abc * 2) % mod;
        const tAbc = (aba * 2 + abc * 2) % mod;
        aba = tAba;
        abc = tAbc;
    }

    return (aba + abc) % mod;
}
export { numOfWays }
