/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class Find132Pattern {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", find132pattern( new int[]{1} ));
    }

    public static boolean find132pattern(int[] nums) {
        int vk = Integer.MIN_VALUE;
        Stack<Integer> stack = new Stack<>();

        for (int i = nums.length - 1; i >= 0; i--) {
            if (nums[i] < vk) {
                return true;
            }

            while (!stack.isEmpty() && stack.peek() < nums[i]) {
                vk = stack.pop();
            }

            stack.push(nums[i]);
        }

        return false;
    }

}
