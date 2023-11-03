/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} pref
 * @return {number[]}
 */
function findArray(pref) {
    const ans = [];
    ans[0] = pref[0];

    for (let i = 1; i < pref.length; ++i) {
        ans[i] = pref[i] ^ pref[i - 1];
    }
    
    return ans;
}
export { findArray }
