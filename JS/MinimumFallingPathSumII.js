/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number}
 */
function minFallingPathSum(grid) {
    const n = grid.length;
    const f = new Array(n + 1).fill().map(() => Array(n).fill(0));
    const inf = 1 << 30;

    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            f[i + 1][j] = grid[i][j];
        }
    }

    for (let i = 1; i <= n; i++) {
        for (let j = 0; j < n; j++) {
            let x = inf;
            for (let k = 0; k < n; k++) {
                if (k !== j) {
                    x = Math.min(x, f[i - 1][k]);
                }
            }
            if (x === inf) {
                x = 0;
            }
            f[i][j] += x;
        }
    }

    let minSum = Infinity;
    f[n].forEach((sum) => {
        minSum = Math.min(minSum, sum);
    });
    return minSum;
}
export { minFallingPathSum }
