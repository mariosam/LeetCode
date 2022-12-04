/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {digits[]} nums
 * @return {number[]}
 */
function plusOne(digits) {
    for ( let i = digits.length-1; i >= 0; i-- ) {
        digits[i]++;

        if ( digits[i] > 9 ) digits[i] = 0; else return digits;
    }

    digits.unshift(1);

    return digits;
};
export { plusOne }
