/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} time
 * @param {number} totalTrips
 * @return {number}
 */
function minimumTime(time, totalTrips) {
    let left = 1;
    let right = totalTrips * Math.max(...time);
    console.log("valor de right : "+right);

    while ( left < right ) {
        let mid = left + (right-left)/2;

        if ( check(time, mid) >= totalTrips ) {
            right = mid;
            right = Math.round( right );
        } else {
            left = mid + 1;
            //left = Math.round( left );
        }
    }

    return left;
}

function check(arr, per) {
    let count = 0;

    for ( let i=0; i < arr.length; i++ ) count = count + (per/(arr[i]));

    return count;
}
export { minimumTime }
