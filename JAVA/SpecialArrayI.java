/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SpecialArrayI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isArraySpecial( new int[]{1,2} ));
    }

    public static boolean isArraySpecial(int[] nums) {
        for (int i = 1; i < nums.length; i++) {
            if (Math.abs(nums[i] - nums[i - 1]) % 2 == 0) {
                return false;
            }
        }

        return true;
    }

}
