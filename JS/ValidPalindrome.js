/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {boolean}
 */
function isPalindrome(s) {
    s = s.toLowerCase().replace(/[^A-Z0-9]/ig, "");

    return s == s.split('').reverse().join('');
}
export { isPalindrome }
