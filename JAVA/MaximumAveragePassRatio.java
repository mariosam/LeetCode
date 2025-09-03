/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.PriorityQueue;

public class MaximumAveragePassRatio {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxAverageRatio(new int[][]{{1,2},{3,5},{2,2}}, 2));
    }

    public static double maxAverageRatio(int[][] classes, int extraStudents) {
        PriorityQueue<int[]> pq = new PriorityQueue<>((a, b) -> {
            double diffA = gain(a[0], a[1]);
            double diffB = gain(b[0], b[1]);
            return Double.compare(diffB, diffA); // max-heap
        });

        for (int[] c : classes) {
            pq.offer(new int[]{c[0], c[1]});
        }

        while (extraStudents-- > 0) {
            int[] cur = pq.poll();
            cur[0]++;
            cur[1]++;
            pq.offer(cur);
        }

        double sum = 0.0;
        while (!pq.isEmpty()) {
            int[] c = pq.poll();
            sum += (double) c[0] / c[1];
        }
        return sum / classes.length;
    }

    private static double gain(int pass, int total) {
        return (double)(pass + 1) / (total + 1) - (double) pass / total;
    }
}
