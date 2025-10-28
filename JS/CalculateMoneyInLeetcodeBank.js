/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number}
 */
function totalMoney(n) {
    let num = 0, ans = 0, index = 0;

    for (let i = 0; i < n; i++) {
        if (i % 7 === 0) {
            num++;
            index = 0;
        }
        ans += num + index * 1;
        index++;
    }

    return ans;
}
export { totalMoney }
