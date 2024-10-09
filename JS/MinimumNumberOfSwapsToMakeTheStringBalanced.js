/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function minSwaps(s) {
    let unmatched = 0;

    for (const c of s) {
        if (c === '[') {
            unmatched++;
        } else if (unmatched > 0) {
            // c === ']' and there's a match
            unmatched--;
        }
    }

    return Math.floor((unmatched + 1) / 2);
}
export { minSwaps }
