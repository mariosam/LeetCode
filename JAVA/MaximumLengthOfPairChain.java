/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximumLengthOfPairChain {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findLongestChain( new int[][]{{2}} ));
    }

    public static int findLongestChain(int[][] pairs) {
        Arrays.sort(pairs, (a, b) -> a[1] - b[1]);
        int ans = 0;
        int cur = Integer.MIN_VALUE;

        for (int[] p : pairs) {
            if (cur < p[0]) {
                cur = p[1];
                ans++;
            }
        }

        return ans;
    }
}
