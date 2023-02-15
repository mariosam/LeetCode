/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountOddNumbersInAnIntervalRange {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countOdds( 5, 10 ));
    }

    public static int countOdds(int low, int high) {
        double diff = high - low;
        diff = diff + 1;
        diff = diff / 2;

        if ( low % 2 == 0 ) {
            return (int) Math.floor(diff);
        } else {
            return (int) Math.ceil(diff);
        }
    }

}
