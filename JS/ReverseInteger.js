/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} x
 * @return {number}
 */
function reverse(x) {
    let rev = 0;

    while (x !== 0) {
        const pop = x % 10;
        x = Math.trunc(x / 10);
        
        if (rev > Math.floor(Number.MAX_SAFE_INTEGER / 10) || (rev === Math.floor(Number.MAX_SAFE_INTEGER / 10) && pop > 7)) {
            return 0;
        }
        if (rev < Math.ceil(Number.MIN_SAFE_INTEGER / 10) || (rev === Math.ceil(Number.MIN_SAFE_INTEGER / 10) && pop < -8)) {
            return 0;
        }
        
        rev = rev * 10 + pop;
    }

    return rev;
}
export { reverse }
