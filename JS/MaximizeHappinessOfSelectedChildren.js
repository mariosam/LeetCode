/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} happiness
 * @param {number} k
 * @return {number}
 */
function maximumHappinessSum(happiness, k) {
    happiness.sort((a, b) => a - b);
    let ans = 0;
    const n = happiness.length;

    for (let i = 0; i < k; i++) {
        const x = happiness[n - i - 1] - i;
        if (x > 0) ans += x;
    }

    return ans;
}
export { maximumHappinessSum }
