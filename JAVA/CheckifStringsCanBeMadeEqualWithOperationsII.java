/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CheckifStringsCanBeMadeEqualWithOperationsII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", checkStrings( "bank", "kanb" ));
    }

    public static boolean checkStrings(String s1, String s2) {
        int[][] cnt1 = new int[2][26];
        int[][] cnt2 = new int[2][26];

        for (int i = 0; i < s1.length(); i++) {
            int idx1 = s1.charAt(i) - 'a';
            int idx2 = s2.charAt(i) - 'a';

            cnt1[i % 2][idx1]++;
            cnt2[i % 2][idx2]++;
        }

        for (int p = 0; p < 2; p++) {
            for (int c = 0; c < 26; c++) {
                if (cnt1[p][c] != cnt2[p][c]) {
                    return false;
                }
            }
        }

        return true;
    }

}
