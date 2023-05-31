/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimizeMaximumOfArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimizeArrayValue( new int[]{1,2,2,1} ));
    }

    public static int minimizeArrayValue(int[] nums) {
        int n = nums.length;
        long res = 0, sum = 0;

        for (int i = 0; i < n; i++) {
            sum += nums[i];
            if ((sum % (i+1) == 0)) {
                res = Math.max(res,sum / (i+1));
            } else {
                res = Math.max(res,sum / (i+1) + 1);
            }
        }
        
        return (int) res;
    }
}
