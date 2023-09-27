/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} goal
 * @param {number} k
 * @return {number}
 */
function numMusicPlaylists(n, goal, k) {
    const mod = 1000000007;
    const f = new Array(goal + 1).fill(null).map(() => new Array(n + 1).fill(0));
    f[0][0] = 1;

    for (let i = 1; i <= goal; i++) {
        for (let j = 1; j <= n; j++) {
            f[i][j] = (f[i - 1][j - 1] * (n - j + 1)) % mod;
            if (j > k) {
                f[i][j] = (f[i][j] + (f[i - 1][j] * (j - k)) % mod) % mod;
            }
        }
    }

    return f[goal][n];
}
export { numMusicPlaylists }
