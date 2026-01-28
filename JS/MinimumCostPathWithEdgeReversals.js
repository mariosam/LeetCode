/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @param {number[][]} edges
 * @return {number}
 */
function minCost(n, edges) {
    const g = Array.from({ length: n }, () => []);

    for (const [u, v, w] of edges) {
        g[u].push([v, w]);
        g[v].push([u, w * 2]);
    }

    const INF = 1e18;
    const dist = Array(n).fill(INF);
    dist[0] = 0;

    // heap local (não conflita)
    function push(heap, item) {
        heap.push(item);
        let i = heap.length - 1;
        while (i > 0) {
            let p = (i - 1) >> 1;
            if (heap[p][0] <= heap[i][0]) break;
            [heap[p], heap[i]] = [heap[i], heap[p]];
            i = p;
        }
    }

    function pop(heap) {
        const top = heap[0];
        const last = heap.pop();
        if (heap.length) {
            heap[0] = last;
            let i = 0;
            while (true) {
                let l = i * 2 + 1, r = l + 1, m = i;
                if (l < heap.length && heap[l][0] < heap[m][0]) m = l;
                if (r < heap.length && heap[r][0] < heap[m][0]) m = r;
                if (m === i) break;
                [heap[i], heap[m]] = [heap[m], heap[i]];
                i = m;
            }
        }
        return top;
    }

    const heap = [];
    push(heap, [0, 0]);

    while (heap.length) {
        const [d, u] = pop(heap);
        if (d > dist[u]) continue;
        if (u === n - 1) return d;

        for (const [v, w] of g[u]) {
            const nd = d + w;
            if (nd < dist[v]) {
                dist[v] = nd;
                push(heap, [nd, v]);
            }
        }
    }

    return -1;
}
export { minCost }
