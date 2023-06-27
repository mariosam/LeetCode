/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @return {boolean}
 */
function canMakeArithmeticProgression(arr) {
    arr.sort((a,b)=>a-b);

    for ( let i=0; i < arr.length-2; i++ ) {
        if ( Math.abs(arr[i]-arr[i+1]) !== Math.abs(arr[i+1]-arr[i+2]) ) {
            return false;
        }
    }
    
    return true;
}
export { canMakeArithmeticProgression }
