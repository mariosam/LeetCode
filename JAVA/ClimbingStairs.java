/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ClimbingStairs {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", climbStairs( 5 ));
    }

    public static int climbStairs(int n) {
        if ( n == 1 ) return n;

        Integer[] ways = new Integer[n];
        ways[0] = 1;
        ways[1] = 2;

        for ( int stairs = 3; stairs <= n; stairs++ ) {
            ways[stairs-1] = ways[stairs-2] + ways[stairs-3];
        }

        return ways[n-1];
    }

}
