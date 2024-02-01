/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfLaserBeamsInBank {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfBeams( new String[]{"000","111","000"} ));
    }

    public static int numberOfBeams(String[] bank) {
        int m = bank.length;
        int n = m > 0 ? bank[0].length() : 0;

        if (m == 0 || n == 0) {
            return 0;
        }

        int pre = 0;
        int res = 0;

        for (int j = 0; j < n; j++) {
            if (bank[0].charAt(j) == '1') {
                pre++;
            }
        }

        for (int i = 1; i < m; i++) {
            int chk = 0;
            String cur = bank[i];

            for (int j = 0; j < n; j++) {
                if (cur.charAt(j) == '1') {
                    chk++;
                }
            }

            if (chk > 0) {
                res += comb(pre, chk);
                pre = chk;
            }
        }

        return res;
    }

    private static int comb(int num1, int num2) {
        return num1 * num2;
    }

}
