/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfWaysToSplitArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", waysToSplitArray( new int[]{1,2,3} ));
    }

    public static int waysToSplitArray(int[] nums) {
        int n = nums.length;

        long sum = 0;
        for (int i = 0; i < n; i++) {
            sum += nums[i];
        }

        long presum = 0;
        int res = 0;
        for (int i = 0; i < n; i++) {
            presum += nums[i];
            if (i < n - 1 && presum >= sum - presum) {
                res++;
            }
        }
        return res;
    }

}
