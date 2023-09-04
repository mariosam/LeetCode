/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximumRunningTimeOfComputers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxRunTime( 2, new int[]{2} ));
    }

    public static long maxRunTime(int n, int[] batteries) {
        long sum = Arrays.stream(batteries).asLongStream().sum();
        Arrays.sort(batteries);

        int i = batteries.length - 1;
        while (batteries[i] > sum / n) {
            sum -= batteries[i--];
            --n;
        }

        return sum / n;
    }
}
