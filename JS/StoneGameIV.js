/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {boolean}
 */
function winnerSquareGame(n) {
    const f = new Array(n + 1).fill(false);

    for (let i = 1; i <= n; i++) {
        for (let j = 1; j * j <= i; j++) {
            if (!f[i - j * j]) {
                f[i] = true;
                break;
            }
        }
    }
    return f[n];
}
export { winnerSquareGame }
