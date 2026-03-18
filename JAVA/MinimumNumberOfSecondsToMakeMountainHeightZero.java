/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumNumberOfSecondsToMakeMountainHeightZero {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minNumberOfSeconds( 2, new int[]{1, 2, 3} ));
    }

    public static long minNumberOfSeconds(int mountainHeight, int[] workerTimes) {
        long l = 1;
        long r = (long) Arrays.stream(workerTimes).min().getAsInt() * mountainHeight *
                (mountainHeight + 1) / 2;

        while (l < r) {
        final long m = (l + r) / 2;
        if (getReducedHeight(workerTimes, m) < mountainHeight)
            l = m + 1;
        else
            r = m;
        }

        return l;
    }

    // Returns the total height reduced by all workers in `m` seconds.
    private static int getReducedHeight(int[] workerTimes, long m) {
        int reducedHeight = 0;
        for (int workerTime : workerTimes)
        reducedHeight += (int) ((-1 + Math.sqrt(1 + 8 * m / workerTime)) / 2);
        return reducedHeight;
    }
}
