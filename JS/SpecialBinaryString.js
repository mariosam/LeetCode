/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function makeLargestSpecial(s) {
    let cnt = 0, i = 0;
    let v = [];

    for (let j = 0; j < s.length; j++) {
        cnt += s[j] === '1' ? 1 : -1;

        if (cnt === 0) {
            let inner = s.substring(i + 1, j);
            v.push('1' + makeLargestSpecial(inner) + '0');
            i = j + 1;
        }
    }

    v.sort().reverse();
    return v.join('');
}
export { makeLargestSpecial }
