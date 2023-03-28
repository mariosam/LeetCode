/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LongestCycleInGraph {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestCycle( new int[]{1,2,3} ));
    }

    public static int longestCycle(int[] edges) {
        int n = edges.length, ret = -1;
        boolean[] visited = new boolean[n];

        for (int i = 0; i < n; i++) {
            if (visited[i]) continue;
            int p1 = i, p2 = edges[p1];
        
            while (p1 != -1 && !visited[p1]) {
                visited[p1] = true;
                if (p2 != -1) p2 = edges[p2];
                if (p2 != -1) p2 = edges[p2];
                if (p2 == p1) {
                    int p = p1, len1 = 1;
                    while (edges[p] != p1) {
                        p = edges[p];
                        len1++;
                    }
                    ret = Math.max(ret, len1);
                    break;
                }
                p1 = edges[p1];
            }
        }
        
        return ret;
    }

}
