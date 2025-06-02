/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number} limit
 * @return {number}
 */
function distributeCandies(n, limit) {
    if (n > 3 * limit) {
        return 0;
    }

    let ans = comb2(n + 2);
    if (n > limit) {
        ans -= 3 * comb2(n - limit + 1);
    }
    if (n - 2 >= 2 * limit) {
        ans += 3 * comb2(n - 2 * limit);
    }

    return ans;
}

function comb2(n) {
    return Math.floor(n * (n - 1) / 2);
}
export { distributeCandies }
