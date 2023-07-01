/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} grid
 * @return {number}
 */
function countNegatives(grid) {
    let neg = 0;

    for ( let i=0; i < grid.length; i++ ) {
        for ( let j=0; j < grid[i].length; j++ ) {
            if ( grid[i][j] < 0 ) {
                neg += grid[i].length - j;
                break;
            }
        }
    }

    return neg;
}
export { countNegatives }
