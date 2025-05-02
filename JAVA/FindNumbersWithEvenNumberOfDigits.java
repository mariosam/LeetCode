/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class FindNumbersWithEvenNumberOfDigits {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findNumbers( new int[]{5,5,5} ));
    }

    public static int findNumbers(int[] nums) {
        Arrays.sort(nums);
        int cnt = 0;
        int base = 10;
        boolean flag = false;

        for (int n : nums) {
            while (n >= base) {
                base *= 10;
                flag = !flag;
            }
            if (flag) {
                cnt++;
            }
        }
        return cnt;
    }

}
