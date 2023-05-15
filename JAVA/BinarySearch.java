/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class BinarySearch {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", search( new int[]{5}, 5 ));
    }

    public static int search(int[] nums, int target) {
        int start = 0;
        int end = nums.length - 1;
        int center;

        while (start <= end) {
            center = (start + end) / 2;
            if (nums[center] == target) {
                return center;
            } else if (nums[center] < target) {
                start = center + 1;
            } else {
                end = center - 1;
            }
        }
        
        return -1;
    }

}
