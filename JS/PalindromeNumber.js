/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} x
 * @return {boolean}
 */
function isPalindrome(x) {
    //se for negativo
    if ( x < 0 ) return false;

    //compara o original com a copia invertida
    return x == parseInt(x.toString().split('').reverse().join(''));
}
export { isPalindrome }
