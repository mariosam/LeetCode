/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} words
 * @param {string} chars
 * @return {number}
 */
function countCharacters(words, chars) {
    const cnt = {};
    let res = 0;

    [...chars].forEach(ch => {
        cnt[ch] = (cnt[ch] || 0) + 1;
    });

    words.forEach(word => {
        const tmp = {};
        let match = true;

        [...word].forEach(ch => {
            tmp[ch] = (tmp[ch] || 0) + 1;
            if (tmp[ch] > (cnt[ch] || 0)) {
                match = false;
            }
        });

        if (match) {
            res += word.length;
        }
    });

    return res;
}
export { countCharacters }
