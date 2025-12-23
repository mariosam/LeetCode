/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} strs
 * @return {number}
 */
function minDeletionSize(strs) {
    const n = strs[0].length;
    const f = Array(n).fill(1);

    for (let i = 1; i < n; i++) {
        for (let j = 0; j < i; j++) {
            let ok = true;
            for (const s of strs) {
                if (s[j] > s[i]) {
                    ok = false;
                    break;
                }
            }
            if (ok) {
                f[i] = Math.max(f[i], f[j] + 1);
            }
        }
    }

    return n - Math.max(...f);
}
export { minDeletionSize }
