/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class SingleNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", singleNumber( new int[]{3,2,2,3} ));
    }

    public static int singleNumber(int[] nums) {
        return Arrays.stream( nums ).reduce(0, (x, y) -> x ^ y);
    }

}
