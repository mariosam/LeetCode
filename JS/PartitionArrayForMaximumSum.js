/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @param {number} k
 * @return {number}
 */
function maxSumAfterPartitioning(arr, k) {
    const n = arr.length;
    const f = new Array(n + 1).fill(0);

    for (let i = 1; i <= n; i++) {
        let mx = 0;
        for (let j = i; j > Math.max(0, i - k); j--) {
            mx = Math.max(mx, arr[j - 1]);
            f[i] = Math.max(f[i], f[j - 1] + mx * (i - j + 1));
        }
    }

    return f[n];
}
export { maxSumAfterPartitioning }
