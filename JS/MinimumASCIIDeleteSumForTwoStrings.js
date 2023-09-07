/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s1
 * @param {string} s2
 * @return {number}
 */
function minimumDeleteSum(s1, s2) {
    const m = s1.length;
    const n = s2.length;
    const f = new Array(m + 1).fill().map(() => new Array(n + 1).fill(0));

    for (let i = 1; i <= m; i++) {
        f[i][0] = f[i - 1][0] + s1.charCodeAt(i - 1);
    }

    for (let j = 1; j <= n; j++) {
        f[0][j] = f[0][j - 1] + s2.charCodeAt(j - 1);
    }

    for (let i = 1; i <= m; i++) {
        for (let j = 1; j <= n; j++) {
            if (s1.charAt(i - 1) === s2.charAt(j - 1)) {
                f[i][j] = f[i - 1][j - 1];
            } else {
                f[i][j] = Math.min(f[i - 1][j] + s1.charCodeAt(i - 1), f[i][j - 1] + s2.charCodeAt(j - 1));
            }
        }
    }

    return f[m][n];
}
export { minimumDeleteSum }
