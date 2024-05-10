/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} word
 * @param {character} ch
 * @return {string}
 */
function reversePrefix(word, ch) {
    let j = word.indexOf(ch);
    if (j === -1) {
        return word;
    }

    let s = word.split('');
    let i = 0;

    while (i < j) {
        let temp = s[i];
        s[i] = s[j];
        s[j] = temp;
        i++;
        j--;
    }

    return s.join('');
}
export { reversePrefix }
