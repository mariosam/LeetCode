/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumValueOfAnOrderedTripletI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumTripletValue( new int[]{0,0,1,1,1,0,0,0,0,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,0} ));
    }

    public static long maximumTripletValue(int[] nums) {
        int n = nums.length;
        long res = 0;

        for (int i = 0; i < n - 2; i++) {
            for (int j = i + 1; j < n - 1; j++) {
                for (int k = j + 1; k < n; k++) {
                    if (nums[i] < 0 && nums[j] < 0 && nums[k] < 0) {
                        continue;
                    }
                    res = Math.max(res, (long) (nums[i] - nums[j]) * nums[k]);
                }
            }
        }

        return res;
    }
}
