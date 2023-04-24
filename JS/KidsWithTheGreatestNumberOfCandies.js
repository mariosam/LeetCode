/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} candies
 * @param {number} extraCandies
 * @return {boolean[]}
 */
function kidsWithCandies(candies, extraCandies) {
    let result = false;
    let kidsWithCandies = [];
    
    for (let candy of candies) {
        let after = candy + extraCandies;

        for (let i of candies) {
            if (after >= i) {
                result = true;
            } else {
                result = false;
                break;
            }
        }
        kidsWithCandies.push( result );
    }

    return kidsWithCandies;
}
export { kidsWithCandies }
