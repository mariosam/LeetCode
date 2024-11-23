/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class DefuseTheBomb {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", decrypt( new int[]{5,5,5}, 2 ));
    }

    public static int[] decrypt(int[] code, int k) {
        int n = code.length;
        int[] ans = new int[n];
        if (k == 0) {
            return ans;
        }

        int[] extendedCode = new int[n * 2];
        System.arraycopy(code, 0, extendedCode, 0, n);
        System.arraycopy(code, 0, extendedCode, n, n);

        int l = (k > 0) ? 1 : n + k;
        int r = (k > 0) ? k : n - 1;

        int sum = 0;
        for (int i = l; i <= r; i++) {
            sum += extendedCode[i];
        }

        for (int i = 0; i < n; i++) {
            ans[i] = sum;
            sum -= extendedCode[l++];
            sum += extendedCode[++r];
        }

        return ans;
    }

}
