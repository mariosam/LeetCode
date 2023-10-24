/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SoupServings {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", soupServings( 40 ));
    }

    public static double soupServings(int n) {
        if (n > 4800) {
            return 1;
        }
        
        int servings = n % 25 == 0 ? n/25 : n/25+1;
        return helper(servings, servings, new double[servings+1][servings+1]);
    }

    private static double helper(int a, int b, double[][] memo) {
        if (a <= 0 && b <= 0) {
            return 0.5;
        }
        
        if (a <= 0) {
            return 1;
        }
        
        if (b <= 0) {
            return 0;
        }
        
        if (memo[a][b] > 0) {
            return memo[a][b];
        }
        
        double p = 0;
        for (int i=1; i<=4; i++) {
            p += 0.25 * helper(a-i, b-(4-i), memo);
        }
        
        memo[a][b] = p;
        return p;
    }
}
