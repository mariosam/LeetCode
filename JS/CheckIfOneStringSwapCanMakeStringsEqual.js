/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s1
 * @param {string} s2
 * @return {boolean}
 */
function areAlmostEqual(s1, s2) {
    let buf = [];

    for (let i = 0; i < s1.length; i++) {
        if (s1[i] !== s2[i]) {
            buf.push([s1[i], s2[i]]);
            if (buf.length > 2) return false;
        }
    }

    if (buf.length === 0) return true;
    if (buf.length !== 2) return false;
    return buf[0][0] === buf[1][1] && buf[0][1] === buf[1][0];
}
export { areAlmostEqual }
