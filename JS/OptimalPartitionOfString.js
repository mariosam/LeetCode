/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function partitionString(s) {
    const checkSameLetter = new Set(s);
    if (checkSameLetter.size === 1) return s.length;
    let set = new Set();
    let count = 1;

    for (const letter of s) {
        if (!set.has(letter)) {
            set.add(letter);
        } else {
            count++;
            set = new Set(letter);
        }
    }

  return count;
}
export { partitionString }
