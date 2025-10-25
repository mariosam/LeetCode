/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CheckIfDigitsAreEqualInStringAfterOperationsI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", hasSameDigits( "3902" ));
    }

    public static boolean hasSameDigits(String s) {
        char[] t = s.toCharArray();
        int n = t.length;
        for (int k = n - 1; k > 1; --k) {
            for (int i = 0; i < k; ++i) {
                t[i] = (char) ((t[i] - '0' + t[i + 1] - '0') % 10 + '0');
            }
        }
        return t[0] == t[1];
    }

}
