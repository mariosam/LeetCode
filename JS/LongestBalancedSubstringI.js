/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {number}
 */
function longestBalanced(s) {
    const n = s.length;
    let ans = 0;

    for (let i = 0; i < n; i++) {
        const cnt = new Array(26).fill(0);
        let mx = 0;
        let v = 0;

        for (let j = i; j < n; j++) {
            const c = s.charCodeAt(j) - 97;

            cnt[c]++;
            if (cnt[c] === 1) v++;

            mx = Math.max(mx, cnt[c]);

            if (mx * v === j - i + 1) {
                ans = Math.max(ans, j - i + 1);
            }
        }
    }

    return ans;
}
export { longestBalanced }
