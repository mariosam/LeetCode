/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} word
 * @return {number}
 */
function wonderfulSubstrings(word) {
    let ans = 0;
    let mask = 0;
    let freq = Array(1024).fill(0);
    freq[0] = 1;

    for (let i = 0; i < word.length; i++) {
        let c = word.charCodeAt(i) - 'a'.charCodeAt(0);
        mask ^= 1 << c;
        ans += freq[mask];
        
        for (let j = 0; j < 10; j++) {
            ans += freq[mask ^ (1 << j)];
        }
        
        freq[mask]++;
    }

    return ans;
}
export { wonderfulSubstrings }
