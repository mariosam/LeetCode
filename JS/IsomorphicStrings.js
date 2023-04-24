/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
function isIsomorphic(s, t) {
    for ( let i=0; i < s.length; i++ ) {
        if ( s.indexOf(s.charAt(i) ) != t.indexOf(t.charAt(i)) ){
            return false;
        }
    }
    
    return true;
}
export { isIsomorphic }
