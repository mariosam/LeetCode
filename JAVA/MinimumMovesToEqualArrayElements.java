/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumMovesToEqualArrayElements {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minMoves( new int[]{1,2,2} ));
    }

    public static int minMoves(int[] nums) {
        if (nums.length == 0) return 0;
        Arrays.sort(nums);
        int min_num = nums[0];
        int ans = 0;
        for (int num : nums) {
            ans += num - min_num;
        }
        return ans;
    }
}
