/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class BestTimeToBuyAndSellStock {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxProfit( new int[]{5}, 5 ));
    }

    public static int maxProfit(int[] prices, int fee) {
        int n = prices.length;
        int dp_i_0 = 0, dp_i_1 = Integer.MIN_VALUE;

        for (int i = 0; i < n; i++) {
            int temp = dp_i_0;
            dp_i_0 = Math.max(dp_i_0, dp_i_1 + prices[i]);
            dp_i_1 = Math.max(dp_i_1, temp - prices[i] - fee);
        }
        
        return dp_i_0;
    }

}
