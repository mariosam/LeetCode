/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfWaysToPaintNx3Grid {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numOfWays( 2 ));
    }

    public static int numOfWays(int n) {
        long aba = 6, abc = 6, t_aba, t_abc, mod = 1000000007;
        for (int i = 0; i < n - 1; i++) {
            t_aba = aba * 3 + abc * 2;
            t_abc = aba * 2 + abc * 2;
            aba = t_aba % mod;
            abc = t_abc % mod;
        }
        return (int)((aba + abc) % mod);
    }

}
