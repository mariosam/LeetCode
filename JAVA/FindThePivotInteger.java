/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindThePivotInteger {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", pivotInteger( 4 ));
    }

    public static int pivotInteger(int n) {
        for (int x = 1; x <= n; ++x) {
            if ((1 + x) * x == (x + n) * (n - x + 1)) {
                return x;
            }
        }
        return -1;
    }
}
