/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumDistanceToTheTargetElement {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", getMinDistance(new int[]{1,5,0,10,14}, 5, 1));
    }

    public static int getMinDistance(int[] nums, int target, int start) {
        int n = nums.length;

        for (int i = 0; start + i < n || start - i >= 0; i++) {
            if (start + i < n) {
                if (nums[start + i] == target) {
                    return i;
                }
            }
            if (start - i >= 0) {
                if (nums[start - i] == target) {
                    return i;
                }
            }
        }

        return -1;
    }
}
