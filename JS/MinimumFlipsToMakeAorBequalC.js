/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} a
 * @param {number} b
 * @param {number} c
 * @return {number}
 */
function minFlips(a, b, c) {
    let res = 0;

    for (let i = 0; i <= 31; i++) {
        if ((c & (1 << i)) != 0) {
            if ((a & (1 << i)) == 0 && (b & (1 << i)) == 0) {
                res++;
            }
        } else {
            if ((a & (1 << i)) != 0) res++;
            if ((b & (1 << i)) != 0) res++;
        }
    }
    
    return res;
}
export { minFlips }
