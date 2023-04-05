/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class ReducingDishes {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxSatisfaction( new int[]{3,2,2,3} ));
    }

    public static int maxSatisfaction(int[] satisfaction) {
        Arrays.sort(satisfaction);
        int sum = 0;
        int res = 0;

        for ( int i=satisfaction.length-1; i >= 0; i-- ) {
            if ( satisfaction[i] + res + sum > res ) {
                res = satisfaction[i] + res + sum;
                sum += satisfaction[i];
            }
        }

        return res;
    }

}
