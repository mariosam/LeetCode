/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} days
 * @param {number[]} costs
 * @return {number}
 */
function mincostTickets(days, costs) {
    if (days.length == 0) return 0;
    let dp = [0], len = days[days.length-1], idx = 0, duration = [1,7,30];
    
    for (let i=1; i<=len; i++) {
        if (i == days[idx]) {
            dp[i] = Infinity;
            for (let j=0;j<costs.length;j++) {
                if (i > duration[j]) {
                    dp[i] = Math.min(dp[i], dp[i-duration[j]] + costs[j]);
                } else {
                    dp[i] = Math.min(dp[i], dp[0] + costs[j]);
                }
            }
            idx++;
        } else {
            dp[i] = dp[i-1];
        }
    }
    
    return dp[len];
}
export { mincostTickets }
