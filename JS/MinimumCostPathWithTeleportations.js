/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @param {number} k
 * @return {number}
 */
function minCost(grid, k) {
    const m = grid.length;
    const n = grid[0].length;
    const INF = 1e18; // seguro para JS

    // f[t][i][j]
    const f = Array.from({ length: k + 1 }, () =>
        Array.from({ length: m }, () =>
            Array(n).fill(INF)
        )
    );

    f[0][0][0] = 0;

    // DP base (t = 0)
    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            if (i > 0) {
                f[0][i][j] = Math.min(f[0][i][j], f[0][i - 1][j] + grid[i][j]);
            }
            if (j > 0) {
                f[0][i][j] = Math.min(f[0][i][j], f[0][i][j - 1] + grid[i][j]);
            }
        }
    }

    // Agrupa posições por valor
    const g = new Map();
    for (let i = 0; i < m; i++) {
        for (let j = 0; j < n; j++) {
            const x = grid[i][j];
            if (!g.has(x)) g.set(x, []);
            g.get(x).push([i, j]);
        }
    }

    // Ordena chaves decrescente
    const keys = Array.from(g.keys()).sort((a, b) => b - a);

    for (let t = 1; t <= k; t++) {
        let mn = INF;

        for (const key of keys) {
            const pos = g.get(key);
            for (const [i, j] of pos) {
                mn = Math.min(mn, f[t - 1][i][j]);
            }
            for (const [i, j] of pos) {
                f[t][i][j] = mn;
            }
        }

        for (let i = 0; i < m; i++) {
            for (let j = 0; j < n; j++) {
                if (i > 0) {
                    f[t][i][j] = Math.min(f[t][i][j], f[t][i - 1][j] + grid[i][j]);
                }
                if (j > 0) {
                    f[t][i][j] = Math.min(f[t][i][j], f[t][i][j - 1] + grid[i][j]);
                }
            }
        }
    }

    let ans = INF;
    for (let t = 0; t <= k; t++) {
        ans = Math.min(ans, f[t][m - 1][n - 1]);
    }

    return ans;
}
export { minCost }
