/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} k
 * @return {number}
 */
function smallestRepunitDivByK(k) {
    if (k % 2 === 0 || k % 5 === 0) return -1;

    let n = 1;
    let count = 1;

    while (n % k !== 0) {
        n = (n * 10 + 1) % k;
        count++;
    }

    return count;
}
export { smallestRepunitDivByK }
