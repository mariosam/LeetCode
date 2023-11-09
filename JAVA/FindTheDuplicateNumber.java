/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheDuplicateNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findDuplicate( new int[]{-5,1,5,0,-7} ));
    }

    public static int findDuplicate(int[] nums) {
        int left = 1;
        int right = nums.length - 1;

        while (left < right) {
            int mid = left + ((right - left) >> 1);

            int count = 0;
            for (int num : nums) {
                if (num <= mid) {
                    count++;
                }
            }

            if (count > mid) {
                right = mid;
            } else {
                left = mid + 1;
            }
        }

        return left;
    }
}
