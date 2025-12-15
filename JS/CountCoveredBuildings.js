/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} buildings
 * @return {number}
 */
function countCoveredBuildings(n, buildings) {
    const g1 = new Map();
    const g2 = new Map();

    for (const [x, y] of buildings) {
        if (!g1.has(x)) g1.set(x, []);
        if (!g2.has(y)) g2.set(y, []);
        g1.get(x).push(y);
        g2.get(y).push(x);
    }

    for (const list of g1.values()) list.sort((a, b) => a - b);
    for (const list of g2.values()) list.sort((a, b) => a - b);

    let ans = 0;
    for (const [x, y] of buildings) {
        const l1 = g1.get(x);
        const l2 = g2.get(y);

        if (l2[0] < x && x < l2[l2.length - 1] &&
            l1[0] < y && y < l1[l1.length - 1]) {
            ans++;
        }
    }

    return ans;
}
export { countCoveredBuildings }
