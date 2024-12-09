/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumLimitOfBallsInaBag {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumSize( new int[]{1,2,2}, 3 ));
    }

    public static int minimumSize(int[] nums, int maxOperations) {
        int r = Arrays.stream(nums).max().orElse(0);
        return 1 + binarySearch(1, r, nums, maxOperations);
    }

    private static int binarySearch(int low, int high, int[] nums, int maxOperations) {
        while (low <= high) {
            int mid = (low + high) / 2;
            int cnt = 0;
            for (int x : nums) {
                cnt += (x - 1) / mid;
            }
            if (cnt <= maxOperations) {
                high = mid - 1;
            } else {
                low = mid + 1;
            }
        }
        return low - 1;
    }
}
