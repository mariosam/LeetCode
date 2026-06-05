/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} cost
 * @return {number}
 */
function minimumCost(cost) {
    cost.sort((a, b) => a - b);
    let ans = 0;

    for (let i = cost.length - 1; i >= 0; i--) {
        ans += cost[i];
        i--;

        if (i >= 0) {
            ans += cost[i];
        }
        i--;
    }
    return ans;
}
export { minimumCost }
