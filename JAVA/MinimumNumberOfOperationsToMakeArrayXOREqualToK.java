/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumNumberOfOperationsToMakeArrayXOREqualToK {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minOperations( new int[]{1,2,2,1}, 2 ));
    }

    public static int minOperations(int[] nums, int k) {
        int xorSum = k;
        for (int x : nums) {
            xorSum ^= x;
        }
        return Integer.bitCount(xorSum);
    }
}
