/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class SetIntersectionSizeAtLeastTwo {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", intersectionSizeTwo( new int[][]{{3,2,2,3}} ));
    }

    public static int intersectionSizeTwo(int[][] intervals) {
        Arrays.sort(intervals, (x, y) -> 
            x[1] == y[1] ? Integer.compare(y[0], x[0]) 
                         : Integer.compare(x[1], y[1])
        );

        int res = 2;
        int a = intervals[0][1] - 1;
        int b = intervals[0][1];

        for (int[] iv : intervals) {
            int s = iv[0], e = iv[1];

            if (s <= a) {
                continue;
            } else if (s <= b) {
                res++;
                a = b;
                b = e;
            } else {
                res += 2;
                a = e - 1;
                b = e;
            }
        }

        return res;
    }

}
