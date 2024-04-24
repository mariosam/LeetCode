/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} edges
 * @return {number[]}
 */
function findMinHeightTrees(n, edges) {
    if (n === 1) {
        return [0];
    }

    const adj = new Array(n).fill().map(() => new Set());
    for (const [u, v] of edges) {
        adj[u].add(v);
        adj[v].add(u);
    }

    const leaves = [];
    for (let i = 0; i < n; ++i) {
        if (adj[i].size === 1) {
            leaves.push(i);
        }
    }

    while (n > 2) {
        n -= leaves.length;
        const newLeaves = [];
        for (const i of leaves) {
            const j = [...adj[i]][0];
            adj[j].delete(i);
            if (adj[j].size === 1) {
                newLeaves.push(j);
            }
        }
        leaves.length = 0;
        leaves.push(...newLeaves);
    }
    return leaves;
}
export { findMinHeightTrees }
