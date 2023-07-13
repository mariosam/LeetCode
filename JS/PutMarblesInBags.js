/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} weights
 * @param {number} k
 * @return {number}
 */
function putMarbles(weights, k) {
    let ans = 0;
    const n = weights.length;
    const arr = [];

    for (let i = 0; i < n - 1; i++) {
        arr[i] = weights[i] + weights[i + 1];
    }
    
    arr.sort((a, b) => a - b);
    for (let i = 0; i < k - 1; i++) {
        ans += arr[n - 2 - i] - arr[i];
    }
    
    return ans;
}
export { putMarbles }
