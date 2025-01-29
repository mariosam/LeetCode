/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} graph
 * @return {number[]}
 */
function eventualSafeNodes(graph) {
    let n = graph.length;
    let color = new Array(n).fill(0);
    
    function dfs(node) {
        if (color[node] > 0) return color[node] === 2;
        color[node] = 1;
        for (let neighbor of graph[node]) {
            if (!dfs(neighbor)) return false;
        }
        color[node] = 2;
        return true;
    }

    let result = [];
    for (let i = 0; i < n; i++) {
        if (dfs(i)) result.push(i);
    }

    return result;
}
export { eventualSafeNodes }
