/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SpecialPositionsInBinaryMatrix {

    public static void main(String[] args) {
        System.out.printf("Resultado: %s\n", numSpecial( new int[][] {{1, 0, 0}, {0, 1, 0}, {0, 0, 1}}));
    }

    public static int numSpecial(int[][] mat) {
        final int m = mat.length;
        final int n = mat[0].length;
        int ans = 0;
        int[] rowOnes = new int[m];
        int[] colOnes = new int[n];

        for (int i = 0; i < m; ++i)
        for (int j = 0; j < n; ++j)
            if (mat[i][j] == 1) {
            ++rowOnes[i];
            ++colOnes[j];
            }

        for (int i = 0; i < m; ++i)
        for (int j = 0; j < n; ++j)
            if (mat[i][j] == 1 && rowOnes[i] == 1 && colOnes[j] == 1)
            ++ans;

        return ans;
    }

}
