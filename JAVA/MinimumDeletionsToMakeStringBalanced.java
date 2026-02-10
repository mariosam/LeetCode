/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumDeletionsToMakeStringBalanced {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumDeletions("aabaaaabbb"));
    }

    public static int minimumDeletions(String s) {
        int n = s.length();
        int rightA = 0;
        for (int i = 0; i < n; i++) {
            if (s.charAt(i) == 'a') {
                rightA++;
            }
        }

        int leftB = 0;
        int res = rightA;
        for (int i = 0; i < n; i++) {
            char c = s.charAt(i);
            if (c == 'a') {
                rightA--;
            } else {
                leftB++;
            }
            res = Math.min(res, leftB + rightA);
        }
        return res;
    }
}
