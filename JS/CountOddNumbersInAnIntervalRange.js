/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} low
 * @param {number} high
 * @return {number}
 */
function countOdds(low, high) {
    if ( low % 2 == 0 ) {
        return Math.floor(((high - low)+1)/2);
    } else {
        return Math.ceil(((high - low)+1)/2);
    }
}
export { countOdds }
