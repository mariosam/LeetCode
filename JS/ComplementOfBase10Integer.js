/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function bitwiseComplement(n) {
    let lo = 1;
    let hi = 31;

    while (lo < hi) {
        let mid = (lo + hi) >>> 1;
        let numCur = 1 << mid;

        if (numCur <= n) {
            lo = mid + 1;
        } else {
            hi = mid;
        }
    }

    return ((1 << hi) - 1) ^ n;
}
export { bitwiseComplement }
