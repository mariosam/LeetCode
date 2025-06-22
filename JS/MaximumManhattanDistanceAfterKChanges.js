/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {number} k
 * @return {number}
 */
function maxDistance(s, k) {
    let ans = 0 // Maximum Manhattan distance found
    let x = 0 // Current x-coordinate
    let y = 0 // Current y-coordinate

    for (let i = 0; i < s.length; i++) {
        if (s[i] === 'N') y++
        else if (s[i] === 'S') y--
        else if (s[i] === 'E') x++
        else x-- // 'W' direction

        ans = Math.max(ans, Math.min(Math.abs(x) + Math.abs(y) + k * 2, i + 1))
    }

    return ans
}
export { maxDistance }
