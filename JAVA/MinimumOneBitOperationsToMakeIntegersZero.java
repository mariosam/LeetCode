/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumOneBitOperationsToMakeIntegersZero {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumOneBitOperations( 2 ));
    }

    public static int minimumOneBitOperations(int n) {
        int ans = 0;
        for (; n > 0; n >>= 1) {
            ans ^= n;
        }
        return ans;
    }
}
