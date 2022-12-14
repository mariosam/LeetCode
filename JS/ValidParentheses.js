/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * Check if the order of opened/closed parentheses is valid.
 */
function isValid(s) {
    let stck = [];

    for ( let i=0; i < s.length; i++ ) {
        let pos = stck[stck.length-1];

        if ( s[i] == "(" || s[i] == "{" || s[i] == "[" ) {
            stck.push( s[i] );
        } else if ( (pos == "(" && s[i] == ")") || (pos == "{" && s[i] == "}") || (pos == "[" && s[i] == "]") ) {
            stck.pop();
        } else {
            return false;
        }
    }

    return stck.length ? false : true;
}
export { isValid }
