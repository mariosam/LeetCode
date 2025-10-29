/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CalculateMoneyInLeetcodeBank {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", totalMoney( 5 ));
    }

    public static int totalMoney(int n) {
        int num = 0, ans = 0, index = 0;

        for (int i = 0; i < n; i++) {
            if (i % 7 == 0) {
                num++;
                index = 0;
            }
            ans += num + index * 1;
            index++;
        }

        return ans;
    }

}
