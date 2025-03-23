/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LongestNiceSubarray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestNiceSubarray( new int[]{0,1,2} ));
    }

    public static int longestNiceSubarray(int[] nums) {
        int i = 0, mask = 0, res = 0;

        for (int j = 0; j < nums.length; j++) {
            int e = nums[j];
            while ((mask & e) != 0) {
                mask ^= nums[i];
                i++;
            }
            mask |= e;
            res = Math.max(res, j - i + 1);
        }
        return res;
    }

}
