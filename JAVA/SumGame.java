/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SumGame {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", sumGame("5023"));
    }

    public static boolean sumGame(String num) {
        int cnt1 = 0;
        int cnt2 = 0;
        int sum1 = 0;
        int sum2 = 0;
        int n = num.length();

        for (int i = 0; i < n / 2; i++) {
            if (num.charAt(i) == '?') {
                cnt1++;
            } else {
                sum1 += num.charAt(i) - '0';
            }
        }

        for (int i = n / 2; i < n; i++) {
            if (num.charAt(i) == '?') {
                cnt2++;
            } else {
                sum2 += num.charAt(i) - '0';
            }
        }

        if ((cnt1 + cnt2) % 2 != 0) {
            return true;
        }
        int sub = 9 * (cnt1 - cnt2) / 2 + (sum1 - sum2);

        return sub != 0;
    }

}
