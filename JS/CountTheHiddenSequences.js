/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} differences
 * @param {number} lower
 * @param {number} upper
 * @return {number}
 */
function numberOfArrays(differences, lower, upper) {
    let x = 0, mi = 0, mx = 0;

    for (let d of differences) {
        x += d;
        mi = Math.min(mi, x);
        mx = Math.max(mx, x);
    }

    return Math.max(upper - lower - (mx - mi) + 1, 0);  
}
export { numberOfArrays }
