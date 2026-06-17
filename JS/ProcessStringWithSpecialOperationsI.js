/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function processStr(s) {
    let ret = '';

    for (const c of s) {
        if (c === '*') {
            if (ret.length > 0) {
                ret = ret.slice(0, -1);
            }
        } else if (c === '#') {
            if (ret.length > 0) {
                ret += ret;
            }
        } else if (c === '%') {
            ret = ret.split('').reverse().join('');
        } else {
            ret += c;
        }
    }
    return ret;
}
export { processStr }
