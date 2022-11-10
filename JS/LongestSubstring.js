/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function lengthOfLongestSubstring(s) {
    let result = 0;
    let ciclos = 0;
    let arr = [];

    for ( let i = 0; i < s.length; i++ ) {
        //verifica se esse char ja existe no substring analisado.
        if ( arr.includes( s[i] ) ) {
            //reinicia o array com nova sequencia de substring.
            arr = [];
            
            //reiniciar o looping pelo primeiro char da sequencia.
            if ( s.length > ciclos ) {
                i = ciclos;
                ciclos++;
            }
        }
        //junta na substring do array.
        arr.push( s[i] );

        //verifica maior contagem.
        if ( arr.length > result ) result = arr.length;
    }

    return result;
}
export { lengthOfLongestSubstring }
