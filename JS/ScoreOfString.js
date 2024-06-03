/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function scoreOfString(s) {
    let score = 0;

    for (let i = 1; i < s.length; i++) {
        score += Math.abs(s.charCodeAt(i - 1) - s.charCodeAt(i));
    }

    return score;
}
export { scoreOfString }
