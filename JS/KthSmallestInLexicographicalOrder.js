/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} k
 * @return {number}
 */
function findKthNumber(n, k) {
    let curr = 1;
    k -= 1;

    while (k > 0) {
        const steps = calSteps(n, curr, curr + 1);
        if (steps <= k) {
            curr += 1;
            k -= steps;
        } else {
            curr *= 10;
            k -= 1;
        }
    }

    return curr;
}

function calSteps(n, n1, n2) {
    let steps = 0;

    while (n1 <= n) {
        steps += Math.min(n + 1, n2) - n1;
        n1 *= 10;
        n2 *= 10;
    }

    return steps;
}
export { findKthNumber }
