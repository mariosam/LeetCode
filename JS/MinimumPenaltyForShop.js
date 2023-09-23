/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} customers
 * @return {number}
 */
function bestClosingTime(customers) {
    const n = customers.length;
    const s = new Array(n + 1).fill(0);
    for (let i = 0; i < n; i++) {
        s[i + 1] = s[i] + (customers.charAt(i) === 'Y' ? 1 : 0);
    }
    let ans = 0;
    let cost = 1 << 30;
    for (let j = 0; j <= n; j++) {
        const t = j - s[j] + s[n] - s[j];
        if (cost > t) {
            ans = j;
            cost = t;
        }
    }
    return ans;
}
export { bestClosingTime }
