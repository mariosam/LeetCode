/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheWinnerOfTheCircularGame {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findTheWinner( 2, 2 ));
    }

    public static int findTheWinner(int n, int k) {
        if (n == 1) {
            return 1;
        }
        int ans = (findTheWinner(n - 1, k) + k - 1) % n + 1;
        return ans;
    }
}
