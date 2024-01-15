/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} word1
 * @param {string} word2
 * @return {boolean}
 */
function closeStrings(word1, word2) {
    const cnt1 = Array(26).fill(0);
    const cnt2 = Array(26).fill(0);

    for (const c of word1) {
        cnt1[c.charCodeAt(0) - 'a'.charCodeAt(0)]++;
    }

    for (const c of word2) {
        cnt2[c.charCodeAt(0) - 'a'.charCodeAt(0)]++;
    }

    if (!cnt1.every((v1, i) => (v1 === 0) === (cnt2[i] === 0))) {
        return false;
    }

    cnt1.sort((a, b) => a - b);
    cnt2.sort((a, b) => a - b);

    return cnt1.join('') === cnt2.join('');
}
export { closeStrings }
