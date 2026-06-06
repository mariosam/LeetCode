/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumCostOfBuyingCandiesWithDiscount {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumCost(new int[]{1, 2, 3}));
    }

    public static int minimumCost(int[] cost) {
        Arrays.sort(cost);
        int ans = 0;
        for (int i = cost.length - 1; i >= 0; i--) {
            ans += cost[i];
            i--;
            if (i >= 0) {
                ans += cost[i];
            }
            i--;
        }
        return ans;
    }
}
