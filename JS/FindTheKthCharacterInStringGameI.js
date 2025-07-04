/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} k
 * @return {character}
 */
function kthCharacter(k) {
    const count = (k - 1).toString(2).split('').filter(c => c === '1').length;
    return String.fromCharCode('a'.charCodeAt(0) + count);
}
export { kthCharacter }
