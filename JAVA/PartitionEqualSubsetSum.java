/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class PartitionEqualSubsetSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canPartition( new int[]{3,2,2} ));
    }

    public static boolean canPartition(int[] nums) {
        int l = nums.length;
        if (l <= 1) return false;

        int sum = 0;
        for (int num : nums) sum += num;

        if (sum % 2 != 0) return false;

        int target = sum >> 1;
        int[] dp = new int[target + 1];

        for (int num : nums) {
            for (int j = target; j >= num; j--) {
                dp[j] = Math.max(dp[j], dp[j - num] + num);
            }
            if (dp[target] == target) return true;
        }

        return false;
    }

}
