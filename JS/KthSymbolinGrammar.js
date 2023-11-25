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
function kthGrammar(n, k) {
    if (k === 1) {
        return 0;
    }

    if (k % 2 === 0) {
        let r = kthGrammar(n, k / 2);
        if (r === 0) {
            r = 1;
        } else if (r === 1) {
            r = 0;
        }
        return r;
    }

    return kthGrammar(n, (k + 1) / 2);
}
export { kthGrammar }
