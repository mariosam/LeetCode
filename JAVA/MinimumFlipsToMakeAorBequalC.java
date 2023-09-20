/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumFlipsToMakeAorBequalC {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minFlips( 1, 2, 3 ));
    }

    public static int minFlips(int a, int b, int c) {
        int res = 0;

        for (int i = 0; i <= 31; i++) {
            if ((c & (1 << i)) != 0) {
                if ((a & (1 << i)) == 0 && (b & (1 << i)) == 0) {
                    res++;
                }
            } else {
                if ((a & (1 << i)) != 0) res++;
                if ((b & (1 << i)) != 0) res++;
            }
        }
        
        return res;
    }

}
