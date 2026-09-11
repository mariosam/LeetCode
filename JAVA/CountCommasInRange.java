/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountCommasInRange {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countCommas( 123 ));
    }

    public static int countCommas(int n) {
        return n >= 1000 ? n - 999 : 0;
    }
}
