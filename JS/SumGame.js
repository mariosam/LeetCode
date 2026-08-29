/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} num
 * @return {boolean}
 */
function sumGame(num) {
    let cnt1 = 0;
    let cnt2 = 0;
    let sum1 = 0;
    let sum2 = 0;
    const n = num.length;

    for (let i = 0; i < Math.floor(n / 2); i++) {
        if (num[i] === '?') {
            cnt1++;
        } else {
            sum1 += Number(num[i]);
        }
    }

    for (let i = Math.floor(n / 2); i < n; i++) {
        if (num[i] === '?') {
            cnt2++;
        } else {
            sum2 += Number(num[i]);
        }
    }

    if ((cnt1 + cnt2) % 2 !== 0) {
        return true;
    }
    const sub = 9 * (cnt1 - cnt2) / 2 + (sum1 - sum2);

    return sub !== 0;
};
export { sumGame }
