/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaxChunksToMakeSorted {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxChunksToSorted( new int[]{1,0,2,3,4} ));
    }

    public static int maxChunksToSorted(int[] arr) {
        int ans = 0, mx = 0;

        for (int i = 0; i < arr.length; i++) {
            mx = Math.max(mx, arr[i]);
            if (i == mx) {
                ans++;
            }
        }

        return ans;
    }
}
