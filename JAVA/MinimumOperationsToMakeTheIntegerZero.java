/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumOperationsToMakeTheIntegerZero {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", makeTheIntegerZero( 2, 3));
    }

    public static int makeTheIntegerZero(int num1, int num2) {
        for (long ops = 0; ops <= 60; ++ops) {
        long target = num1 - ops * num2;
        if (Long.bitCount(target) <= ops && ops <= target)
            return (int) ops;
        }

        return -1;
    }
}
