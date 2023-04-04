/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} satisfaction
 * @return {number}
 */
function maxSatisfaction(satisfaction) {
    satisfaction.sort((a, b) => a - b);
    let sum = 0;
    let res = 0;

    for ( let i=satisfaction.length-1; i >= 0; i-- ) {
        if ( satisfaction[i] + res + sum > res ) {
        res = satisfaction[i] + res + sum;
        sum += satisfaction[i];
        }
    }

    return res;
}
export { maxSatisfaction }
