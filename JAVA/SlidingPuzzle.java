/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.LinkedList;
import java.util.Map;
import java.util.Queue;

public class SlidingPuzzle {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", slidingPuzzle(new int[][]{{1,2,3},{4,0,5}}));
    }

    public static int slidingPuzzle(int[][] board) {
        Map<String, Boolean> m = new HashMap<>();
        StringBuilder b = new StringBuilder();
        Queue<String> q = new LinkedList<>();
        int[][] moves = {{1, 0}, {-1, 0}, {0, 1}, {0, -1}};
        String target = "123450";

        for (int[] row : board) {
            for (int val : row) {
                b.append(val);
            }
        }

        String start = b.toString();
        if (start.equals(target)) {
            return 0;
        }

        m.put(start, true);
        q.offer(start);
        int t = 1;

        while (!q.isEmpty()) {
            for (int i = q.size(); i > 0; i--) {
                String s = q.poll();
                int idx = s.indexOf('0');
                int x = idx / 3, y = idx % 3;

                for (int[] move : moves) {
                    int nx = x + move[0];
                    int ny = y + move[1];
                    if (nx < 0 || nx >= 2 || ny < 0 || ny >= 3) {
                        continue;
                    }

                    char[] tmp = s.toCharArray();
                    int newIdx = nx * 3 + ny;
                    char temp = tmp[idx];
                    tmp[idx] = tmp[newIdx];
                    tmp[newIdx] = temp;

                    String newS = new String(tmp);
                    if (newS.equals(target)) {
                        return t;
                    }

                    if (!m.containsKey(newS)) {
                        m.put(newS, true);
                        q.offer(newS);
                    }
                }
            }
            t++;
        }
        return -1;
    }

}
