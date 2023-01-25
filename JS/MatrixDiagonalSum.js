/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} mat
 * @return {number}
 */
function diagonalSum(mat) {
    //se possui apenas 1 elemento no array
    if ( mat.length == 1 ) return mat[0][0];
    
    let sum = 0;
    //percorre diagonal: iniciando top left to low right
    for ( let i=0; i < mat.length; i++ ) {
        sum = sum + mat[i][i];
    }

    //percorre diagonal: iniciando low left to top right
    for ( let i=mat.length-1, j=0; i >= 0; i--, j++ ) {
        if ( i != j ) sum = sum + mat[i][j];
    }
    
    return sum;
}
export { diagonalSum }
