/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} complexity
 * @return {number}
 */
function countPermutations(complexity) {
    const mod = 1e9 + 7;
    let ans = 1;

    for (let i = 1; i < complexity.length; i++) {
        if (complexity[i] <= complexity[0]) {
            return 0;
        }
        ans = (ans * i) % mod;
    }

    return ans;
}
export { countPermutations }
