/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class CountTheNumberOfFairPairs {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countFairPairs( new int[]{0,1,2}, 2, 4 ));
    }

    public static long countFairPairs(int[] nums, int lower, int upper) {
        Arrays.sort(nums);
        return countLess(nums, upper) - countLess(nums, lower - 1);
    }

    private static long countLess(int[] nums, int sum) {
        long res = 0;
        for (int i = 0, j = nums.length - 1; i < j; ++i) {
        while (i < j && nums[i] + nums[j] > sum)
            --j;
        res += j - i;
        }
        return res;
    }
}
