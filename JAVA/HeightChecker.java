/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class HeightChecker {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", heightChecker( new int[]{1,1,4,2,1,3} ));
    }

    public static int heightChecker(int[] heights) {
        int[] expected = Arrays.copyOf(heights, heights.length);
        Arrays.sort(expected);
        int ans = 0;
        for (int i = 0; i < heights.length; i++) {
            if (heights[i] != expected[i]) {
                ans++;
            }
        }
        return ans;
    }

}
