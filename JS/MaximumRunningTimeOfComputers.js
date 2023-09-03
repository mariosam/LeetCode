/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[]} batteries
 * @return {number}
 */
function maxRunTime(n, batteries) {
    batteries.sort((a, b) => b - a);
    let sum = batteries.reduce((acc, val) => acc + val, 0);

    for (let i = 0; i < batteries.length; i++) {
        if (batteries[i] <= sum / n) {
            return Math.floor(sum / n);
        }
        sum -= batteries[i];
        n--;
    }

    return 0;
};
export { maxRunTime }
