/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} tickets
 * @param {number} k
 * @return {number}
 */
function timeRequiredToBuy(tickets, k) {
    let ans = 0;
    for (let i = 0; i < tickets.length; i++) {
        if (i <= k) {
            ans += Math.min(tickets[k], tickets[i]);
        } else {
            ans += Math.min(tickets[k] - 1, tickets[i]);
        }
    }
    return ans;
};
export { timeRequiredToBuy }
