/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} word
 * @return {number}
 */
function minimumPushes(word) {
    const cnt = new Array(26).fill(0);

    for (const c of word) {
        cnt[c.charCodeAt(0) - 97]++;
    }

    cnt.sort((a, b) => a - b);
    let ans = 0;

    for (let i = 0; i < 26; i++) {
        ans += (Math.floor(i / 8) + 1) * cnt[25 - i];
    }
    return ans;
}
export { minimumPushes }
