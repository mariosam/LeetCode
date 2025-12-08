/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountPartitionsWithEvenSumDifference {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countPartitions( new int[]{1,1,1} ));
    }

    public static int countPartitions(int[] nums) {
        int n = nums.length;
        int[] p = new int[n];

        p[0] = nums[0];
        for (int i = 1; i < n; i++) {
            p[i] = p[i - 1] + nums[i];
        }

        int res = 0;
        for (int i = 0; i < n - 1; i++) {
            if (((p[n - 1] - p[i]) - p[i]) % 2 == 0) {
                res++;
            }
        }
        return res;
    }

}
