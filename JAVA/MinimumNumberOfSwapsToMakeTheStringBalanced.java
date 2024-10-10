/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumNumberOfSwapsToMakeTheStringBalanced {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minSwaps( "][][" ));
    }

    public static int minSwaps(String s) {
        int unmatched = 0;

        for (final char c : s.toCharArray())
        if (c == '[')
            ++unmatched;
        else if (unmatched > 0) // c == ']' and there's a match.
            --unmatched;

        return (unmatched + 1) / 2;
    }
}
