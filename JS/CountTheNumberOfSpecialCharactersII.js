/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} word
 * @return {number}
 */
function numberOfSpecialChars(word) {
    const lowerLastOccurrence = new Map();
    const upperFirstOccurrence = new Map();
    let ret = 0;

    for (let i = 0; i < word.length; i++) {
        const c = word[i];

        if (c >= 'a' && c <= 'z') {
            lowerLastOccurrence.set(c, i);
        } else {
            if (!upperFirstOccurrence.has(c)) {
                upperFirstOccurrence.set(c, i);
            }
        }
    }

    for (let i = 0; i < 26; i++) {
        const c = String.fromCharCode(i + 'A'.charCodeAt(0));
        const c2 = String.fromCharCode(i + 'a'.charCodeAt(0));

        if (
            upperFirstOccurrence.has(c) &&
            lowerLastOccurrence.has(c2) &&
            lowerLastOccurrence.get(c2) < upperFirstOccurrence.get(c)
        ) {
            ret++;
        }
    }
    return ret;
}
export { numberOfSpecialChars }
