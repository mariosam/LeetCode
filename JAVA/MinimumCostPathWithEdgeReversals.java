/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.PriorityQueue;

public class MinimumCostPathWithEdgeReversals {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minCost( 4, new int[][]{{0,1,3},{3,1,1},{2,3,4},{0,2,2}} ));
    }

    public static int minCost(int n, int[][] edges) {
        List<int[]>[] g = new ArrayList[n];
        Arrays.setAll(g, k -> new ArrayList<>());
        for (int[] e : edges) {
            int u = e[0], v = e[1], w = e[2];
            g[u].add(new int[] {v, w});
            g[v].add(new int[] {u, w * 2});
        }

        final int inf = Integer.MAX_VALUE / 2;
        int[] dist = new int[n];
        Arrays.fill(dist, inf);
        dist[0] = 0;

        PriorityQueue<int[]> pq = new PriorityQueue<>(Comparator.comparingInt(a -> a[0]));
        pq.offer(new int[] {0, 0});

        while (!pq.isEmpty()) {
            int[] cur = pq.poll();
            int d = cur[0], u = cur[1];
            if (d > dist[u]) {
                continue;
            }
            if (u == n - 1) {
                return d;
            }
            for (int[] nei : g[u]) {
                int v = nei[0], w = nei[1];
                int nd = d + w;
                if (nd < dist[v]) {
                    dist[v] = nd;
                    pq.offer(new int[] {nd, v});
                }
            }
        }
        return -1;
    }
}
