/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
function isSubsequence(s, t) {
    let sIdx = 0;
    let tIdx = 0;

    while (sIdx < s.length && tIdx < t.length) {
        if (s[sIdx] === t[tIdx]) {
            sIdx++;
        }
        tIdx++;
    }

    return sIdx === s.length;
}
export { isSubsequence }
