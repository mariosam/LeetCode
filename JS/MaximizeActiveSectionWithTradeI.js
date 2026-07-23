/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function maxActiveSectionsAfterTrade(s) {
    const n = s.length;
    let ans = 0;
    let i = 0;
    let pre = -Infinity;
    let mx = 0;

    while (i < n) {
        let j = i + 1;

        while (j < n && s[j] === s[i]) {
            j++;
        }
        const cur = j - i;

        if (s[i] === '1') {
            ans += cur;
        } else {
            mx = Math.max(mx, pre + cur);
            pre = cur;
        }
        i = j;
    }
    return ans + mx;
}
export { maxActiveSectionsAfterTrade }
