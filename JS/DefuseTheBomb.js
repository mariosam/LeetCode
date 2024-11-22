/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} code
 * @param {number} k
 * @return {number[]}
 */
function decrypt(code, k) {
    const n = code.length;
    const ans = Array(n).fill(0);
    if (k === 0) {
        return ans;
    }

    const extendedCode = [...code, ...code];
    let l = k > 0 ? 1 : n + k;
    let r = k > 0 ? k : n - 1;

    let sum = 0;
    for (let i = l; i <= r; i++) {
        sum += extendedCode[i];
    }

    for (let i = 0; i < n; i++) {
        ans[i] = sum;
        sum -= extendedCode[l];
        sum += extendedCode[r + 1];
        l++;
        r++;
    }

    return ans;
}
export { decrypt }
