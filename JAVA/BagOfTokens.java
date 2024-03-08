/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class BagOfTokens {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", bagOfTokensScore( new int[]{5}, 5 ));
    }

    public static int bagOfTokensScore(int[] tokens, int power) {
        Arrays.sort(tokens);
        int i = 0, j = tokens.length - 1, ans = 0, t = 0;
        while (i <= j) {
            if (power >= tokens[i]) {
                power -= tokens[i];
                i++;
                t++;
                ans = Math.max(ans, t);
            } else if (t > 0) {
                power += tokens[j];
                j--;
                t--;
            } else {
                break;
            }
        }
        return ans;
    }

}
