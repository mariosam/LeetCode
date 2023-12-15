/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheDifference {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findTheDifference( "abcd", "abcde" ));
    }

    public static char findTheDifference(String s, String t) {
        char c = 0;

        for (int i = 0; i < s.length(); ++i)
            c ^= s.charAt(i);
        for (int i = 0; i < t.length(); ++i)
            c ^= t.charAt(i);

        return c;
    }
}
