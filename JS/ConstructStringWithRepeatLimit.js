/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {number} repeatLimit
 * @return {string}
 */
function repeatLimitedString(s, repeatLimit) {
    let freq = Array(26).fill(0);
    let result = [];

    for (let c of s) {
        freq[c.charCodeAt(0) - 'a'.charCodeAt(0)]++;
    }

    for (let i = 25; i >= 0; i--) {
        if (freq[i] === 0) continue;
        let j = Math.min(freq[i], repeatLimit);
        while (j-- > 0) {
            result.push(String.fromCharCode('a'.charCodeAt(0) + i));
            freq[i]--;
        }
        if (freq[i] === 0) continue;
        let k = i - 1;
        while (k >= 0 && freq[k] === 0) {
            k--;
        }
        if (k === -1) return result.join('');
        result.push(String.fromCharCode('a'.charCodeAt(0) + k));
        freq[k]--;
        i++; // Keep `i` in the same position
    }

    return result.join('');
}
export { repeatLimitedString }
