/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

const ROMAN = {"I":1, "V":5, "X":10, "L":50, "C":100, "D":500, "M":1000};

/**
 * @param {string} s
 * @return {number}
 */
function romanToInt(s) {
    let soma = 0;

    for ( let i=0; i < s.length; i++ ) {
        if ( i+1 < s.length && ROMAN[ s[i] ] < ROMAN[ s[i+1] ]  ) {
            soma = soma + (ROMAN[ s[i+1] ] - ROMAN[ s[i] ]);

            i++;
        } else {
            soma += ROMAN[ s[i] ];
        }
    }
    
    return soma;
}
export { romanToInt }
