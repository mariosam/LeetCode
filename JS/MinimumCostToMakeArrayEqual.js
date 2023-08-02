/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number[]} cost
 * @return {number}
 */
function minCost(nums, cost) {
    const n = nums.length;
    const arr = [];

    for (let i = 0; i < n; i++) {
        const a = nums[i];
        const b = cost[i];
        arr.push({ a, b });
    }

    arr.sort((x, y) => x.a - y.a);

    const f = new Array(n + 1).fill(0);
    const g = new Array(n + 1).fill(0);

    for (let i = 1; i <= n; i++) {
        const a = arr[i - 1].a;
        const b = arr[i - 1].b;
        f[i] = f[i - 1] + a * b;
        g[i] = g[i - 1] + b;
    }

    let ans = Number.MAX_SAFE_INTEGER;

    for (let i = 1; i <= n; i++) {
        const a = arr[i - 1].a;
        const l = a * g[i - 1] - f[i - 1];
        const r = f[n] - f[i] - a * (g[n] - g[i]);
        ans = Math.min(ans, l + r);
    }

    return ans;
}
export { minCost }
