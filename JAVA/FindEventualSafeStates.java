/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class FindEventualSafeStates {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", eventualSafeNodes( new int[][]{{1,2},{2,3},{5},{0},{5},{},{}} ));
    }

    public static List<Integer> eventualSafeNodes(int[][] graph) {
        int n = graph.length;
        int[] color = new int[n];
        List<Integer> result = new ArrayList<>();

        for (int i = 0; i < n; i++) {
            if (dfs(i, graph, color)) {
                result.add(i);
            }
        }

        return result;
    }

    private static boolean dfs(int node, int[][] graph, int[] color) {
        if (color[node] > 0) return color[node] == 2;
        color[node] = 1;
        for (int neighbor : graph[node]) {
            if (!dfs(neighbor, graph, color)) {
                return false;
            }
        }
        color[node] = 2;
        return true;
    }

}
