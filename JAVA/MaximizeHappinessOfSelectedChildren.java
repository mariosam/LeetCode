/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximizeHappinessOfSelectedChildren {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumHappinessSum( new int[]{1,2,3}, 2 ));
    }

    public static long maximumHappinessSum(int[] happiness, int k) {
        Arrays.sort(happiness);
        long ans = 0;
        for (int i = 0, n = happiness.length; i < k; ++i) {
            int x = happiness[n - i - 1] - i;
            ans += Math.max(x, 0);
        }
        return ans;
    }
}
