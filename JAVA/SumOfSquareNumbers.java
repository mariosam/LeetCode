/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SumOfSquareNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", judgeSquareSum(1));
    }

    public static boolean judgeSquareSum(int c) {
        long a = 0;
        long b = (long) Math.sqrt(c);
        while (a <= b) {
            long s = a * a + b * b;
            if (s == c) {
                return true;
            }
            if (s < c) {
                a++;
            } else {
                b--;
            }
        }
        return false;
    }
}
