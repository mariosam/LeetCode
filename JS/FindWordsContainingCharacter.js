/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} words
 * @param {character} x
 * @return {number[]}
 */
function findWordsContaining(words, x) {
    const result = [];

    for (let i = 0; i < words.length; i++) {
        if (words[i].includes(x)) {
            result.push(i);
        }
    }

    return result;
}
export { findWordsContaining }
