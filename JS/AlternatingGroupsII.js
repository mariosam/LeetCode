/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} colors
 * @param {number} k
 * @return {number}
 */
function numberOfAlternatingGroups(colors, k) {
    let n = colors.length;
    let res = 0, cnt = 1;

    for (let i = -k + 2; i < n; i++) {
        let idx1 = (i + n) % n;
        let idx2 = (i - 1 + n) % n;

        if (colors[idx1] !== colors[idx2]) {
            cnt++;
        } else {
            cnt = 1;
        }

        if (cnt >= k) {
            res++;
        }
    }
    return res;
}
export { numberOfAlternatingGroups }
