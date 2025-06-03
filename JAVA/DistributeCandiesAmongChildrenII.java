/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class DistributeCandiesAmongChildrenII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", distributeCandies( 2, 3 ));
    }

    public static long distributeCandies(int n, int limit) {
        if (n > 3 * limit) {
            return 0;
        }
        long ans = comb2(n + 2);
        if (n > limit) {
            ans -= 3 * comb2(n - limit + 1);
        }
        if (n - 2 >= 2 * limit) {
            ans += 3 * comb2(n - 2 * limit);
        }
        return ans;
    }

    private static long comb2(int n) {
        return 1L * n * (n - 1) / 2;
    }
}
