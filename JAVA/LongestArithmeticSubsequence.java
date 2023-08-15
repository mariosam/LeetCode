/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LongestArithmeticSubsequence {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestArithSeqLength( new int[]{1,3} ));
    }

    public static int longestArithSeqLength(int[] nums) {
        int n = nums.length;
        int[][] f = new int[n][1001];
        int ans = 0;
        
        for (int i = 1; i < n; i++) {
            for (int k = 0; k < i; k++) {
                int j = nums[i] - nums[k] + 500;
                f[i][j] = Math.max(f[i][j], f[k][j] + 1);
                ans = Math.max(ans, f[i][j]);
            }
        }

        return ans + 1;
    }

}
