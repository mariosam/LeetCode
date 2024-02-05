/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class PartitionArrayForMaximumSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxSumAfterPartitioning( new int[]{3,2,2}, 1 ));
    }

    public static int maxSumAfterPartitioning(int[] arr, int k) {
        int n = arr.length;
        int[] f = new int[n + 1];

        for (int i = 1; i <= n; i++) {
            int mx = 0;
            for (int j = i; j > Math.max(0, i - k); j--) {
                mx = Math.max(mx, arr[j - 1]);
                f[i] = Math.max(f[i], f[j - 1] + mx * (i - j + 1));
            }
        }

        return f[n];
    }

}
