/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CheckifArrayIsSortedAndRotated {

    public static void main(String[] args) {
        int[] nums = {3, 9, 0, 2};
        System.out.printf("Resultado: %b\n", check(nums));
    }

    public static boolean check(int[] nums) {
        int countOutOfOrder = 0;
        int n = nums.length;
        for (int i = 0; i < n; ++i) {
            if (nums[i] > nums[(i + 1) % n]) {
                ++countOutOfOrder;
            }
        }
        return countOutOfOrder <= 1;
    }

}
