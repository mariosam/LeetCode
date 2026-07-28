/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumProductOfThreeNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumProduct(new int[]{1, 2, 3}));
    }

    public static int maximumProduct(int[] nums) {
        int max_1 = -Integer.MAX_VALUE;
        int max_2 = -Integer.MAX_VALUE;
        int max_3 = -Integer.MAX_VALUE;
        int min_1 = Integer.MAX_VALUE;
        int min_2 = Integer.MAX_VALUE;
        for (int num : nums) {
            if (num > max_1){
                max_3 = max_2;
                max_2 = max_1;
                max_1 = num;
            }
            else if (num > max_2){
                max_3 = max_2;
                max_2 = num;
            }
            else if (num > max_3)
                max_3 = num;
            if (num < min_1){
                min_2 = min_1;
                min_1 = num;
            }
            else if (num < min_2)
                min_2 = num;
        }
        return Math.max(max_1 * max_2 * max_3, max_1 * min_1 * min_2);
    }
}
