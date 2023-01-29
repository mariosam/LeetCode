/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} costs
 * @param {number} coins
 * @return {number}
 */
function maxIceCream(costs, coins) {
    let ices = 0;
    let dollars = 0;
    costs.sort(function(a, b) { return a - b; });

    for ( let i=0; i < costs.length; i++ ) {
        if ( dollars < coins && coins > costs[i] ) {
            dollars += costs[i];
            ices++;
        }
        //se passou do ponto
        if ( dollars > coins ) {
            dollars -= costs[i];
            ices--;
            return ices;
        }
        if ( dollars == coins ) return ices;
    }

    return ices;
}
export { maxIceCream }
