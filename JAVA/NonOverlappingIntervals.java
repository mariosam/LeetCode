/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.Comparator;

public class NonOverlappingIntervals {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", eraseOverlapIntervals( new int[][]{{3,2},{2,3}} ));
    }

    public static int eraseOverlapIntervals(int[][] intervals) {
        Arrays.sort(intervals, Comparator.comparingInt(a -> a[1]));
        int t = intervals[0][1];
        int ans = 0;

        for (int i = 1; i < intervals.length; i++) {
            if (intervals[i][0] >= t) {
                t = intervals[i][1];
            } else {
                ans++;
            }
        }
        
        return ans;
    }

}
