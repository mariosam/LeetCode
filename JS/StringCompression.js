/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {character[]} chars
 * @return {number}
 */
function compress(chars) {
    if ( chars.length < 2 ) return chars.length;
    
    let comp = chars[0];
    let count = 1;
    let compressIdx = 0;

    for ( let i=1; i <= chars.length; i++ ) {
        if ( i < chars.length && chars[i] == comp ) {
            count++;
        } else {
            chars[compressIdx] = comp;
            compressIdx++;

            if ( count > 1 ) {
                let countStr = count.toString();
                for ( let j=0; j < countStr.length; j++ ) {
                    chars[compressIdx+j] = countStr[j];
                }
                compressIdx += countStr.length;
            }

            if ( i < chars.length ) comp = chars[i];

            count = 1;
        }
    }

    return compressIdx;
}
export { compress }
