/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} goal
 * @return {boolean}
 */
function rotateString(s, goal) {
    if (s.length !== goal.length) {
        return false;
    }
    const str = s + s;

    return str.includes(goal);
}
export { rotateString }
