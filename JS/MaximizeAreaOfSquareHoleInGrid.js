/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} m
 * @param {number[]} hBars
 * @param {number[]} vBars
 * @return {number}
 */
function maximizeSquareHoleArea(n, m, hBars, vBars) {
    hBars.sort((a, b) => a - b);
    vBars.sort((a, b) => a - b);

    let a = 1, b = 1;

    let pre = 1, cur = 1;
    for (const x of hBars) {
        if (x - 1 === pre) {
            cur++;
        } else {
            cur = 2;
        }
        pre = x;
        a = Math.max(a, cur);
    }

    pre = 1;
    cur = 1;
    for (const x of vBars) {
        if (x - 1 === pre) {
            cur++;
        } else {
            cur = 2;
        }
        pre = x;
        b = Math.max(b, cur);
    }

    const side = Math.min(a, b);
    return side * side;
}
export { maximizeSquareHoleArea }
