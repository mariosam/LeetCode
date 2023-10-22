/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function soupServings(n) {
    if (n > 4800) {
        return 1;
    }

    const servings = Math.ceil(n / 25);
    return helper(servings, servings, Array.from({ length: servings + 1 }, () => Array(servings + 1).fill(-1)));
};

function helper(a, b, memo) {
    if (a <= 0 && b <= 0) {
        return 0.5;
    }

    if (a <= 0) {
        return 1;
    }

    if (b <= 0) {
        return 0;
    }

    if (memo[a][b] > -1) {
        return memo[a][b];
    }

    let p = 0;
    for (let i = 1; i <= 4; i++) {
        p += 0.25 * helper(a - i, b - (4 - i), memo);
    }

    memo[a][b] = p;
    return p;
}
export { soupServings }
