/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LongestSubarrayWithMaximumBitwiseAND {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestSubarray( new int[]{1,2,3,4} ));
    }

    public static int longestSubarray(int[] nums) {
            int n = nums.length;
    
            int max = nums[0];
            for (int i = 0; i < n; i++) {
                max = Math.max(max, nums[i]);
            }
    
            int res = 0;
            int curLen = 0;
            for (int i = 0; i < n; i++) {
                if (nums[i] == max) {
                    curLen++;
                } else {
                    curLen = 0;
                }
                res = Math.max(res, curLen);
            }
            return res;
    }

}
