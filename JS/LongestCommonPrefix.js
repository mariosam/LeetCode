/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} strs
 * @return {string}
 */
function longestCommonPrefix(strs) {
    let result = "";

    //toma a menor string como base
    strs.sort();

    //percorre a menor string ate o final
    outer: for ( let j=1; j <= strs[0].length; j++ ) {
        let temp = strs[0].substring(0, j);

        //percorre o array
        for ( let i=1; i < strs.length; i++ ) {
            //compara a menor string com as opcoes do array
            if ( temp != strs[i].substring(0, j) ) break outer;
        }

        result = temp;
    }

    return result;
}
export { longestCommonPrefix }
