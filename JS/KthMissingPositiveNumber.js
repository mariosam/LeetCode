/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @param {number} k
 * @return {number}
 */
function findKthPositive(arr, k) {
    let positiveNaturalNumber = arr[0];
    let missingCount = arr[0] - 1;
    if ( missingCount >= k ) return k;
    
    for ( let i = 1; i < arr.length; i++ ) {
        positiveNaturalNumber++;
        if ( positiveNaturalNumber != arr[i] ) {
            missingCount++;
            i--;
            if ( missingCount == k ) return positiveNaturalNumber;
        }
    }

    return (positiveNaturalNumber) + (k - missingCount);
}
export { findKthPositive }
