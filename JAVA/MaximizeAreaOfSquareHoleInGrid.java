/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximizeAreaOfSquareHoleInGrid {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximizeSquareHoleArea(2, 1, new int[]{2}, new int[]{1}));
    }

    public static int maximizeSquareHoleArea(int n, int m, int[] hBars, int[] vBars) {
        Arrays.sort(hBars);
        Arrays.sort(vBars);

        int a = 1, b = 1;

        int pre = 1, cur = 1;
        for (int x : hBars) {
            if (x - 1 == pre) {
                cur++;
            } else {
                cur = 2;
            }
            pre = x;
            a = Math.max(a, cur);
        }

        pre = 1;
        cur = 1;
        for (int x : vBars) {
            if (x - 1 == pre) {
                cur++;
            } else {
                cur = 2;
            }
            pre = x;
            b = Math.max(b, cur);
        }

        int side = Math.min(a, b);
        return side * side;
    }
}
