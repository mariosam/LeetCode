/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function maxFreqSum(s) {
    const cnt = Array(26).fill(0);
    const vowels = new Set(['a', 'e', 'i', 'o', 'u']);

    for (let c of s) {
        cnt[c.charCodeAt(0) - 'a'.charCodeAt(0)]++;
    }

    let a = 0, b = 0;
    for (let i = 0; i < 26; i++) {
        const c = String.fromCharCode(i + 'a'.charCodeAt(0));
        if (vowels.has(c)) {
            a = Math.max(a, cnt[i]);
        } else {
            b = Math.max(b, cnt[i]);
        }
    }

    return a + b;
}
export { maxFreqSum }
