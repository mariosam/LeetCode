/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} part
 * @return {string}
 */
function removeOccurrences(s, part) {
    while (s.includes(part)) {
        s = s.replace(part, "");
    }
    return s;
}
export { removeOccurrences }
