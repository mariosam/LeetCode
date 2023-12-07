/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountOfMatchesInTournament {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfMatches( 5 ));
    }

    public static int numberOfMatches(int n) {
        int cnt = 0;

        while (n != 1) {
            cnt += n >> 1;
            if ((n & 1) != 0) {
                n += 1;
            }
            n = n >> 1;
        }

        return cnt;
    }

}
