/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} prices
 * @param {number} fee
 * @return {number}
 */
function maxProfit(prices, fee) {
    let dp = [];
    let prev_0 = 0, prev_1 = -1 * prices[0];

    for (let i = 1; i < prices.length; i++) {
        const price = prices[i];
        dp[i] = [];

        prev_0 = Math.max(prev_0, prev_1 + price - fee);
        prev_1 = Math.max(prev_1, prev_0 - price);
    }

    return prev_0;
}
export { maxProfit }
