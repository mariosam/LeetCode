/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumScoreByChangingTwoElements {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimizeSum( new int[]{1,2,2,1} ));
    }

    public static int minimizeSum(int[] nums) {
        Arrays.sort(nums);
        final int n = nums.length;
        final int highOfChangingTwoMins = nums[n - 1] - nums[2];
        final int highOfChangingTwoMaxs = nums[n - 3] - nums[0];
        final int highOfChangingMinAndMax = nums[n - 2] - nums[1];
        return Math.min(Math.min(highOfChangingTwoMins, highOfChangingTwoMaxs),
                        highOfChangingMinAndMax);
    }

}
