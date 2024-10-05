/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} skill
 * @return {number}
 */
function dividePlayers(skill) {
    const s = skill.reduce((sum, v) => sum + v, 0);
    let m = skill.length / 2;
    
    if (s % m !== 0) {
        return -1;
    }
    
    const t = s / m;
    const d = new Array(1010).fill(0);
    let ans = 0;

    for (const v of skill) {
        if (d[t - v] > 0) {
            ans += v * (t - v);
            d[t - v]--;
            m--;
        } else {
            d[v]++;
        }
    }
    
    return m === 0 ? ans : -1;
}
export { dividePlayers }
