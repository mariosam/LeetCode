/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function lengthOfLastWord(s) {
    //remove os espacos em branco
    s = s.trim();
    //inicializa retorno
    let result = 0;

    //percorre a frase de tras pra frente
    for ( let i = s.length-1; i > -1; i-- ) {
        //quando encontrar um espaco em branco interrompe
        if ( s[i] == " " ) break;
        result++;
    }

    return result;
}
export { lengthOfLastWord }
