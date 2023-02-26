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
    let sMap = [];
    let tMap = [];

    for ( let i=0; i < s.length; i++ ) {
        if ( sMap[t[i]] != tMap[s[i]] ) return false;
        sMap[t[i]] = i + 1;
        tMap[s[i]] = i + 1;
    }

    return true;
}
export { isIsomorphic }
