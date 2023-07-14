/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class PutMarblesInBags {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", putMarbles( new int[]{3,2,2,3}, 2 ));
    }

    public static long putMarbles(int[] weights, int k) {
        long ans = 0;
        int n = weights.length;
        int[] arr = new int[n - 1];

        for (int i = 0; i < n - 1; i++) {
            arr[i] = weights[i] + weights[i + 1];
        }
        
        Arrays.sort(arr);
        for (int i = 0; i < k - 1; i++) {
            ans += arr[n - 2 - i] - arr[i];
        }
        
        return ans;
    }

}
