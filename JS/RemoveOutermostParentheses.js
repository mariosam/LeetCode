/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function removeOuterParentheses(s) {
    let builder = "";
    let count = 1;

    for (let i = 1; i < s.length; i++) {
        const ch = s[i];

        if (ch === '(') {
            count++;
        } else {
            count--;
        }

        if (count === 0) {
            i++;
            count = 1;
            continue;
        } else {
            builder += ch;
        }
    }
    return builder;
}
export { removeOuterParentheses }
