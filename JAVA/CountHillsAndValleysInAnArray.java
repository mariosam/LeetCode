/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountHillsAndValleysInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countHillValley( new int[]{1,2} ));
    }

    public static int countHillValley(int[] nums) {
        int left = nums[0];
        int count = 0;

        for (int i = 1; i < nums.length - 1; i++) {
            if ((left < nums[i] && nums[i] > nums[i + 1]) || 
                (left > nums[i] && nums[i] < nums[i + 1])) {
                count++;
                left = nums[i];
            }
        }
        return count;
    }
}
