/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number[]} queries
 * @return {number[]}
 */
function solveQueries(nums, queries) {
    const n = nums.length;
    const m = n * 2;
    const d = new Array(m).fill(m);

    const left = new Map();
    for (let i = 0; i < m; i++) {
        const x = nums[i % n];
        if (left.has(x)) {
            d[i] = Math.min(d[i], i - left.get(x));
        }
        left.set(x, i);
    }

    const right = new Map();
    for (let i = m - 1; i >= 0; i--) {
        const x = nums[i % n];
        if (right.has(x)) {
            d[i] = Math.min(d[i], right.get(x) - i);
        }
        right.set(x, i);
    }

    for (let i = 0; i < n; i++) {
        d[i] = Math.min(d[i], d[i + n]);
    }

    const ans = [];
    for (const query of queries) {
        ans.push(d[query] >= n ? -1 : d[query]);
    }

    return ans;
}
export { solveQueries }
