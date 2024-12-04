/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {number[]} spaces
 * @return {string}
 */
function addSpaces(s, spaces) {
    let result = "";
    let j = 0;
    for (let i = 0; i < s.length; i++) {
        if (j < spaces.length && i === spaces[j]) {
            result += " ";
            j++;
        }
        result += s[i];
    }
    return result;
}
export { addSpaces }
