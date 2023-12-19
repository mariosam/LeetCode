/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MonotonicArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isMonotonic( new int[]{3,22,3} ));
    }

    public static boolean isMonotonic(int[] nums) {
        boolean isIncr = false;
        boolean isDecr = false;
        for (int i = 1; i < nums.length; i++) {
            if (nums[i] < nums[i - 1]) {
                isIncr = true;
            } else if (nums[i] > nums[i - 1]) {
                isDecr = true;
            }
            if (isIncr && isDecr) {
                return false;
            }
        }
        return true;
    }

}
