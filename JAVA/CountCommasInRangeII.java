/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountCommasInRangeII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countCommas( 123 ));
    }

    public static long countCommas(long n) {
        long ans = 0;
        for (long x = 1000; x <= n; x *= 1000) {
            ans += n - x + 1;
        }
        return ans;
    }
}
