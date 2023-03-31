/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfZeroFilledSubarrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", zeroFilledSubarray( new int[]{3,2,2,3} ));
    }

    public static long zeroFilledSubarray(int[] nums) {
        long res = 0l;
        int n = nums.length, cnt = 0;

        for (int i = 0; i < n; i++) {
            if (nums[i] == 0) {
                cnt++;
                res += cnt;
                continue;
            }
            cnt = 0;
        }
        
        return res;
    }

}
