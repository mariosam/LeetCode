/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} tokens
 * @param {number} power
 * @return {number}
 */
function bagOfTokensScore(tokens, power) {
    tokens.sort((a, b) => a - b);
    let i = 0, j = tokens.length - 1, ans = 0, t = 0;
    while (i <= j) {
        if (power >= tokens[i]) {
            power -= tokens[i];
            i++;
            t++;
            ans = Math.max(ans, t);
        } else if (t > 0) {
            power += tokens[j];
            j--;
            t--;
        } else {
            break;
        }
    }
    return ans;
}
export { bagOfTokensScore }
