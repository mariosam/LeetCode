/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} t
 * @return {character}
 */
function findTheDifference(s, t) {
    let c = 0;

    for (let i = 0; i < s.length; i++) {
        c ^= s.charCodeAt(i);
    }

    for (let i = 0; i < t.length; i++) {
        c ^= t.charCodeAt(i);
    }

    return String.fromCharCode(c);
}
export { findTheDifference }
