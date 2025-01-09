/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} words
 * @return {number}
 */
function countPrefixSuffixPairs(words) {
    let count = 0;
    for (let i = 0; i < words.length - 1; i++) {
        for (let j = i + 1; j < words.length; j++) {
            if (words[j].startsWith(words[i]) && words[j].endsWith(words[i])) count++;
        }
    }
    return count;
}
export { countPrefixSuffixPairs }
