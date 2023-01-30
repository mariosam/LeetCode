/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximumIceCreamBars {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxIceCream( new int[]{1,2,2,1}, 10 ));
    }

    public static int maxIceCream(int[] costs, int coins) {
        int ices = 0;
        int dollars = 0;
        Arrays.sort(costs);
    
        for ( int i=0; i < costs.length; i++ ) {
            if ( dollars < coins && coins > costs[i] ) {
                dollars += costs[i];
                ices++;
            }
            //se passou do ponto
            if ( dollars > coins ) {
                dollars -= costs[i];
                ices--;
                return ices;
            }
            if ( dollars == coins ) return ices;
        }
    
        return ices;
    }
}
