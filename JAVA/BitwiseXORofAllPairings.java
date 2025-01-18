/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class BitwiseXORofAllPairings {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", xorAllNums( new int[]{1,2,1}, new int[]{1,2,1} ));
    }

    public static int xorAllNums(int[] nums1, int[] nums2) {
        final int xors1 = Arrays.stream(nums1).reduce((a, b) -> a ^ b).getAsInt();
        final int xors2 = Arrays.stream(nums2).reduce((a, b) -> a ^ b).getAsInt();
        return (nums1.length % 2 * xors2) ^ (nums2.length % 2 * xors1);
    }

}
