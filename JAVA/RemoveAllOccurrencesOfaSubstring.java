/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RemoveAllOccurrencesOfaSubstring {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", removeOccurrences( "daabcbaabcbc", "abc" ));
    }

    public static String removeOccurrences(String s, String part) {
        while (s.indexOf(part) > -1) {
            int idx = s.indexOf(part);
            s = s.substring(0, idx) + s.substring(idx + part.length());
        }

        return s;
    }

}
