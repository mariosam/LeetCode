/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ConcatenateNonZeroDigitsAndMultiplyBySumI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", sumAndMultiply(5));
    }

    public static long sumAndMultiply(int n) {
        long p = 1;
        long x = 0;
        long s = 0;

        while (n > 0) {
            long v = n % 10;

            if (v != 0) {
                s += v;
                x += p * v;
                p *= 10;
            }
            n /= 10;
        }
        return x * s;
    }
}
