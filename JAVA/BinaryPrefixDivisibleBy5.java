/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class BinaryPrefixDivisibleBy5 {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", prefixesDivBy5( new int[]{1,2,11,2,1} ));
    }

    public static List<Boolean> prefixesDivBy5(int[] nums) {
        List<Boolean> result = new ArrayList<>(nums.length);
        int remainder = 0;
        for (int a : nums) {
            remainder = ((remainder << 1) + a) % 5;
            result.add(remainder == 0);
        }
        return result;
    }

}
