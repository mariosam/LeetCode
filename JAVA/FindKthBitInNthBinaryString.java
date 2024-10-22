/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindKthBitInNthBinaryString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findKthBit( 5, 5 ));
    }

    public static char findKthBit(int n, int k) {
        return (char) ('0' + dfs(n, k));
    }

    private static int dfs(int n, int k) {
        if (k == 1) {
            return 0;
        }
        if ((k & (k - 1)) == 0) {
            return 1;
        }
        int m = 1 << n;
        if (k * 2 < m - 1) {
            return dfs(n - 1, k);
        } else {
            return dfs(n - 1, m - k) ^ 1;
        }
    }

}
