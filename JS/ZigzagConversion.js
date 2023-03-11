/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {number} numRows
 * @return {string}
 */
function convert(s, numRows) {
    let totalDiff = numRows * 2 - 2;
    if (!s || s.length <= numRows || numRows < 2 ) return s;

    let result = "";
    let upDiff = totalDiff;
    let downDiff = totalDiff - upDiff;

    for ( let i = 0; i < numRows; i++ ) {
        let currChar = downDiff / 2;
        let isGoingUp = true;
        
        while ( currChar < s.length ) {
            result += s[currChar];
            
            if ( i == 0 || i == (numRows - 1) ) {
                currChar += totalDiff;
            } else {
                currChar = isGoingUp ? currChar + upDiff : currChar + downDiff;
                isGoingUp = !isGoingUp;
            }
        }
        upDiff -= 2;
        downDiff = totalDiff - upDiff;
    }

    return result;
}
export { convert }
