/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountTotalNumberOfColoredCells {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", coloredCells( 4 ));
    }

    public static long coloredCells(int n) {
        return 1L * n * n + 1L * (n - 1) * (n - 1);
    }
}
