/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} x
 * @return {number}
 */
function numberOfWays(n, x) {
    const mod = 10 ** 9 + 7;
    const f = Array.from({ length: n + 1 }, () => Array(n + 1).fill(0));
    f[0][0] = 1;
    for (let i = 1; i <= n; ++i) {
        const k = Math.pow(i, x);
        for (let j = 0; j <= n; ++j) {
            f[i][j] = f[i - 1][j];
            if (k <= j) {
                f[i][j] = (f[i][j] + f[i - 1][j - k]) % mod;
            }
        }
    }
    return f[n][n];
};
export { numberOfWays }
