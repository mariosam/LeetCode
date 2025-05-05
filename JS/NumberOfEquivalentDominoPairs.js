/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} dominoes
 * @return {number}
 */
function numEquivDominoPairs(dominoes) {
    const cnt = new Array(100).fill(0);
    let res = 0;

    for (const [a, b] of dominoes) {
        const key = Math.min(a, b) * 10 + Math.max(a, b);
        res += cnt[key];
        cnt[key]++;
    }

    return res;
}
export { numEquivDominoPairs }
