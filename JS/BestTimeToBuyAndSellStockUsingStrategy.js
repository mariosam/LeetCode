/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} prices
 * @param {number[]} strategy
 * @param {number} k
 * @return {number}
 */
function maxProfit(prices, strategy, k) {
    const n = prices.length;
    const s = Array(n + 1).fill(0);
    const t = Array(n + 1).fill(0);

    for (let i = 1; i <= n; i++) {
        const a = prices[i - 1];
        const b = strategy[i - 1];
        s[i] = s[i - 1] + a * b;
        t[i] = t[i - 1] + a;
    }

    let ans = s[n];
    for (let i = k; i <= n; i++) {
        ans = Math.max(
            ans,
            s[n] - (s[i] - s[i - k]) + (t[i] - t[i - Math.floor(k / 2)])
        );
    }

    return ans;
}
export { maxProfit }
