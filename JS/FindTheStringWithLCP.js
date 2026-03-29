/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} lcp
 * @return {string}
 */
function findTheString(lcp) {
    const n = lcp.length;
    const s = new Array(n).fill(null);

    let i = 0;

    for (let c = 0; c < 26; c++) {
        while (i < n && s[i] !== null) i++;
        if (i === n) break;

        const ch = String.fromCharCode(97 + c);

        for (let j = i; j < n; j++) {
            if (lcp[i][j] > 0) {
                s[j] = ch;
            }
        }
    }

    for (let ch of s) {
        if (ch === null) return "";
    }

    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n; j++) {
            if (s[i] === s[j]) {
                if (i === n - 1 || j === n - 1) {
                    if (lcp[i][j] !== 1) return "";
                } else {
                    if (lcp[i][j] !== lcp[i+1][j+1] + 1) return "";
                }
            } else {
                if (lcp[i][j] !== 0) return "";
            }
        }
    }

    return s.join('');
}
export { findTheString }
