/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} edges
 * @return {number}
 */
function longestCycle(edges) {
    let n = edges.length, visited = new Array(n).fill(0);
    let res = -Infinity;

    function helper(idx) {
        let map = new Map(), dis = 0;
        map.set(idx, dis);

        while (idx !== -1) {
            if (visited[idx]) {
                if (map.has(idx)) {
                    res = Math.max(dis - map.get(idx) + 1, res);
                }
                break;
            }
            visited[idx] = 1;
            map.set(idx, ++dis);
            idx = edges[idx];
        }
    }

    for (let i = 0; i < n; i++) {
        if (visited[i]) continue;
        helper(i);
    }

    return res === -Infinity ? -1 : res;
}
export { longestCycle }
