/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ComplementOfBase10Integer {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", bitwiseComplement(5));
    }

    public static int bitwiseComplement(int n) {
        int lo = 1, hi = 31;

        while (lo < hi) {
            int mid = (lo + hi) >>> 1;
            int numCur = 1 << mid;

            if (numCur <= n) {
                lo = mid + 1;
            } else {
                hi = mid;
            }
        }

        return ((1 << hi) - 1) ^ n;
    }
}
