/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumXORforEachQuery {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", getMaximumXor( new int[]{1,3,2}, 2 ));
    }

    public static int[] getMaximumXor(int[] nums, int maximumBit) {
        int n = nums.length;
        int[] res = new int[n];
        int max = (1 << maximumBit) - 1;
        int v = 0;

        for (int i = 0; i < n; i++) {
            v ^= nums[i];
            res[n - 1 - i] = max ^ v;
        }

        return res;
    }
}
