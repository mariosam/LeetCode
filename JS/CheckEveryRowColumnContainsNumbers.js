/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} matrix
 * @return {boolean}
 */
function checkValid(matrix) {
    let arTemp = [];

    //se possui apenas 1 elemento no array
    if ( matrix.length == 1 ) return true;

    //percorre as linhas
    for ( let i=0; i < matrix.length; i++ ) {
        for ( let j=0; j < matrix[i].length; j++ ) {
            //se tem algum numero repetido na linha
            if ( arTemp.includes(matrix[i][j]) ) return false;
            //guarda o valor temporariamente
            arTemp.push( matrix[i][j] );
        }
        arTemp = [];
    }

    //percorre as colunas
    for ( let i=0; i < matrix.length; i++ ) {
        for ( let j=0; j < matrix.length; j++ ) {
            //se tem algum numero repetido na coluna
            if ( arTemp.includes(matrix[j][i]) ) return false;
            //guarda o valor temporariamente
            arTemp.push( matrix[j][i] );
        }
        arTemp = [];
    }
    
    return true;
}
export { checkValid }
