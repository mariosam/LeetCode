/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class BestTimeToBuyAndSellStockUsingStrategy {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxProfit( new int[]{1,2,11,2,1}, new int[]{0,1,0,1,0}, 2 ));
    }

    public static long maxProfit(int[] prices, int[] strategy, int k) {
        int n = prices.length;
        long[] s = new long[n + 1];
        long[] t = new long[n + 1];

        for (int i = 1; i <= n; i++) {
            int a = prices[i - 1];
            int b = strategy[i - 1];
            s[i] = s[i - 1] + (long) a * b;
            t[i] = t[i - 1] + a;
        }

        long ans = s[n];
        for (int i = k; i <= n; i++) {
            ans = Math.max(
                ans,
                s[n] - (s[i] - s[i - k]) + (t[i] - t[i - k / 2])
            );
        }

        return ans;
    }

}
