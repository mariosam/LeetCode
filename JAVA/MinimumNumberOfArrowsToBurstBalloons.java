/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumNumberOfArrowsToBurstBalloons {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findMinArrowShots( new int[][]{{1,2,2,1}} ));
    }

    public static int findMinArrowShots(int[][] points) {
        Arrays.sort(points, (a, b) -> Integer.compare(a[0], b[0]));
        int ret = 1;
        for (int i = 1; i < points.length; i++) {
            if (points[i][0] > points[i - 1][1]) {
                ret++;
            } else {
                points[i][1] = Math.min(points[i][1], points[i - 1][1]);
            }
        }
        return ret;
    }
}
