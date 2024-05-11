/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ReversePrefixOfWord {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", reversePrefix( "abcdefd", 'd' ));
    }

    public static String reversePrefix(String word, char ch) {
        int j = word.indexOf(ch);
        if (j < 0) {
            return word;
        }

        char[] s = word.toCharArray();
        int i = 0;

        while (i < j) {
            char temp = s[i];
            s[i] = s[j];
            s[j] = temp;
            i++;
            j--;
        }

        return new String(s);
    }

}
