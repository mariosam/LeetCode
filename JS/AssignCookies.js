/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} g
 * @param {number[]} s
 * @return {number}
 */
function findContentChildren(g, s) {
    if (g.length === 0 || s.length === 0) {
        return 0;
    }

    g.sort((a, b) => a - b);
    s.sort((a, b) => a - b);

    let j = -1;
    for (let i = 0; i < g.length; i++) {
        while (true) {
            j++;
            if (j >= s.length) {
                return i;
            }
            if (s[j] >= g[i]) {
                break;
            }
        }
    }

    return g.length;
}
export { findContentChildren }
