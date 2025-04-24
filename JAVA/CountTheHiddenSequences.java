/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountTheHiddenSequences {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfArrays( new int[]{0,1,2}, 2, 4 ));
    }

    public static int numberOfArrays(int[] differences, int lower, int upper) {
        long x = 0, mi = 0, mx = 0;
        for (int d : differences) {
            x += d;
            mi = Math.min(mi, x);
            mx = Math.max(mx, x);
        }
        return (int) Math.max(upper - lower - (mx - mi) + 1, 0);
    }
}
