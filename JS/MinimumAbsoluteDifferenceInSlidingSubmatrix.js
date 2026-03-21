/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @param {number} k
 * @return {number[][]}
 */
function minAbsDiff(grid, k) {
    const m = grid.length;
    const n = grid[0].length;

    const ans = Array.from({ length: m - k + 1 }, () =>
        Array(n - k + 1).fill(0)
    );

    for (let i = 0; i <= m - k; i++) {
        for (let j = 0; j <= n - k; j++) {

            let nums = [];

            for (let x = i; x < i + k; x++) {
                for (let y = j; y < j + k; y++) {
                    nums.push(grid[x][y]);
                }
            }

            nums.sort((a, b) => a - b);

            let d = Infinity;

            for (let t = 1; t < nums.length; t++) {
                let a = nums[t - 1];
                let b = nums[t];

                if (a !== b) {
                    d = Math.min(d, Math.abs(a - b));
                }
            }

            ans[i][j] = (d === Infinity) ? 0 : d;
        }
    }

    return ans;
}
export { minAbsDiff }
