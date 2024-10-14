/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class DivideIntervalsIntoMinimumNumberOfGroups {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minGroups( new int[][]{{2, 3}} ));
    }

    public static int minGroups(int[][] intervals) {
        // Create arrays to hold start and end times
        int[] starts = new int[intervals.length];
        int[] ends = new int[intervals.length];

        // Fill the start and end arrays
        for (int i = 0; i < intervals.length; i++) {
            starts[i] = intervals[i][0];
            ends[i] = intervals[i][1];
        }

        // Sort the start and end arrays
        Arrays.sort(starts);
        Arrays.sort(ends);

        int groups = 0;
        int activeIntervals = 0;
        int i = 0, j = 0;

        // Two-pointer approach
        while (i < intervals.length) {
            if (starts[i] <= ends[j]) {
                // A new interval starts before the current one ends
                activeIntervals++;
                i++;
            } else {
                // An interval ends
                activeIntervals--;
                j++;
            }

            // Track the maximum number of active intervals
            groups = Math.max(groups, activeIntervals);
        }

        return groups;
    }
}
