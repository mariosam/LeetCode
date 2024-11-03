/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class DeleteCharactersToMakeFancyString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", makeFancyString( "sadbutsad" ));
    }

    public static String makeFancyString(String s) {
        StringBuilder ans = new StringBuilder();

        for (int i = 0; i < s.length(); i++) {
            char c = s.charAt(i);
            int len = ans.length();
            if (len < 2 || c != ans.charAt(len - 1) || c != ans.charAt(len - 2)) {
                ans.append(c);
            }
        }

        return ans.toString();
    }
}
