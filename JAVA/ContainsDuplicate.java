/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class ContainsDuplicate {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", containsDuplicate( new int[]{1,22,1} ));
    }

    public static boolean containsDuplicate(int[] nums) {
        int[] ar = Arrays.stream(nums).distinct().toArray();

        return nums.length != ar.length;
    }

}
