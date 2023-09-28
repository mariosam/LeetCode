/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfMusicPlaylists {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numMusicPlaylists( 2,3,4 ));
    }

    public static int numMusicPlaylists(int n, int goal, int k) {
        final int mod = 1000000007;
        int[][] f = new int[goal + 1][n + 1];
        f[0][0] = 1;
        
        for (int i = 1; i <= goal; i++) {
            for (int j = 1; j <= n; j++) {
                f[i][j] = (int) ((long) f[i - 1][j - 1] * (n - j + 1) % mod);
                if (j > k) {
                    f[i][j] = (f[i][j] + (int) ((long) f[i - 1][j] * (j - k) % mod)) % mod;
                }
            }
        }
        
        return f[goal][n];
    }

}
