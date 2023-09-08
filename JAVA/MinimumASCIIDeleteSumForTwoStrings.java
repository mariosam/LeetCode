/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumASCIIDeleteSumForTwoStrings {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumDeleteSum( "nova", "velha" ));
    }

    public static int minimumDeleteSum(String s1, String s2) {
        int m = s1.length();
        int n = s2.length();
        int[][] f = new int[m + 1][n + 1];

        for (int i = 1; i <= m; i++) {
            f[i][0] = f[i - 1][0] + s1.charAt(i - 1);
        }

        for (int j = 1; j <= n; j++) {
            f[0][j] = f[0][j - 1] + s2.charAt(j - 1);
        }

        for (int i = 1; i <= m; i++) {
            for (int j = 1; j <= n; j++) {
                if (s1.charAt(i - 1) == s2.charAt(j - 1)) {
                    f[i][j] = f[i - 1][j - 1];
                } else {
                    f[i][j] = Math.min(f[i - 1][j] + s1.charAt(i - 1), f[i][j - 1] + s2.charAt(j - 1));
                }
            }
        }

        return f[m][n];
    }
}
