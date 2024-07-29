/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} source
 * @param {string} target
 * @param {character[]} original
 * @param {character[]} changed
 * @param {number[]} cost
 * @return {number}
 */
function minimumCost(source, target, original, changed, cost) {
    const inf = Math.floor(Number.MAX_SAFE_INTEGER / 2);
    const n = 26;
    const dp = Array.from({ length: n + 1 }, () => Array.from({ length: n }, () => Array(n).fill(inf)));

    const g = Array.from({ length: n }, () => Array(n).fill(inf));
    for (let i = 0; i < n; i++) {
        g[i][i] = 0;
    }

    for (let i = 0; i < original.length; i++) {
        const x = original[i].charCodeAt(0) - 'a'.charCodeAt(0);
        const y = changed[i].charCodeAt(0) - 'a'.charCodeAt(0);
        g[x][y] = Math.min(g[x][y], cost[i]);
    }

    dp[0] = g.map(row => [...row]);
    for (let k = 0; k < n; k++) {
        for (let i = 0; i < n; i++) {
            for (let j = 0; j < n; j++) {
                dp[k + 1][i][j] = Math.min(dp[k][i][j], dp[k][i][k] + dp[k][k][j]);
            }
        }
    }

    let ans = 0;
    for (let i = 0; i < source.length; i++) {
        const a = source[i].charCodeAt(0) - 'a'.charCodeAt(0);
        const b = target[i].charCodeAt(0) - 'a'.charCodeAt(0);
        if (dp[n][a][b] >= inf) {
            return -1;
        }
        ans += dp[n][a][b];
    }
    return ans;
}
export { minimumCost }
