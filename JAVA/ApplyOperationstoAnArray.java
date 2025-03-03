/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ApplyOperationstoAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", applyOperations( new int[]{1,2,3,0,0,0} ));
    }

    public static int[] applyOperations(int[] nums) {
        int n = nums.length;

        for (int i = 0; i < n - 1; i++) {
            if (nums[i] == nums[i + 1]) {
                nums[i] *= 2;
                nums[i + 1] = 0;
            }
        }

        int l = 0;
        for (int r = 0; r < n; r++) {
            if (nums[r] != 0) {
                int temp = nums[l];
                nums[l] = nums[r];
                nums[r] = temp;
                l++;
            }
        }

        return nums;
    }

}
