/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.LinkedList;
import java.util.Queue;

public class JumpGameIII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canReach( new int[]{3,2,2,3}, 0 ));
    }

    public static boolean canReach(int[] arr, int start) {
        int n = arr.length;

        Queue<Integer> queue = new LinkedList<>();

        boolean[] visited = new boolean[n];
        queue.offer(start);
        visited[start] = true;

        while (!queue.isEmpty()) {
            int cur = queue.poll();

            if (arr[cur] == 0) {
                return true;
            }

            int next1 = cur - arr[cur];
            int next2 = cur + arr[cur];

            if (next1 >= 0 && !visited[next1]) {
                queue.offer(next1);
                visited[next1] = true;
            }
            if (next2 < n && !visited[next2]) {
                queue.offer(next2);
                visited[next2] = true;
            }
        }
        return false;
    }

}
