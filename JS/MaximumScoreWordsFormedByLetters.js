/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} words
 * @param {character[]} letters
 * @param {number[]} score
 * @return {number}
 */
function maxScoreWords(words, letters, score) {
    const cnt = new Array(26).fill(0);
    for (const letter of letters) {
        cnt[letter.charCodeAt(0) - 'a'.charCodeAt(0)]++;
    }
    const n = words.length;
    let ans = 0;
    
    for (let i = 0; i < (1 << n); ++i) {
        const cur = new Array(26).fill(0);
        for (let j = 0; j < n; ++j) {
            if ((i >> j & 1) === 1) {
                for (const char of words[j]) {
                    cur[char.charCodeAt(0) - 'a'.charCodeAt(0)]++;
                }
            }
        }
        let ok = true;
        let t = 0;
        for (let j = 0; j < 26; ++j) {
            if (cur[j] > cnt[j]) {
                ok = false;
                break;
            }
            t += cur[j] * score[j];
        }
        if (ok && ans < t) {
            ans = t;
        }
    }
    
    return ans;
};
export { maxScoreWords }
