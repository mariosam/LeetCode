/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumCostForTickets {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", mincostTickets( new int[]{1,2,2,1}, new int[]{1,2,2,1} ));
    }

    public static int mincostTickets(int[] days, int[] costs) {
        int len = days.length + 1;
        int[] Days = new int[len];
        System.arraycopy(days, 0, Days, 1, len - 1);
        int[] dp = new int[len];
        dp[0] = 0;
        dp[1] = Days[1];

        for (int i = 1; i < len; i++) {
            int pre1 = dp[i - 1] + costs[0];
            int pre2 = dp[furthestIndex(Days, i, 7)] + costs[1];
            int pre3 = dp[furthestIndex(Days, i, 30)] + costs[2];

            dp[i] = Math.min(pre1, Math.min(pre2, pre3));
        }

        return dp[len - 1];
    }

    private static int furthestIndex(int[] nums, int i, int x) {
        for (int j = i; j > 0; j--) {
            if (nums[i] - nums[j] + 1 <= x && nums[i] - nums[j - 1] + 1 > x)
                return j - 1;
        }
        return 0;
    }
}
