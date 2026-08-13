/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class StoneGameIV {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", winnerSquareGame(5));
    }

    public static boolean winnerSquareGame(int n) {
        boolean[] f = new boolean[n + 1];

        for(int i = 1; i <= n; i++) {
            for(int j = 1; j * j <= i; j++) {
                if(!f[i - j * j]) {
                    f[i] = true;
                    break;
                }
            }
        }

        return f[n];
    }

}
