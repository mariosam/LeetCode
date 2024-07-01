/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {character[]} s
 * @return {void} Do not return anything, modify s in-place instead.
 */
function reverseString(s) {
    for (let i = 0, j = s.length - 1; i < s.length / 2; i++, j--) {
        const temp = s[i];
        s[i] = s[j];
        s[j] = temp;
    }
}
export { reverseString }
