/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} numBottles
 * @param {number} numExchange
 * @return {number}
 */
function numWaterBottles(numBottles, numExchange) {
    if (numBottles < numExchange) {
        return numBottles;
    }

    let quotient = Math.floor(numBottles / numExchange);
    let reminder = numBottles % numExchange;
    let ans = numBottles + quotient;

    while (quotient + reminder >= numExchange) {
        let total = quotient + reminder;
        quotient = Math.floor(total / numExchange);
        reminder = total % numExchange;
        ans += quotient;
    }

    return ans;
};
export { numWaterBottles }
