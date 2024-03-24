/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.Comparator;

public class CustomSortString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", customSortString( "sadbutsad", "bca" ));
    }

    public static String customSortString(String order, String s) {
        Integer[] d = new Integer[26];
        Arrays.fill(d, Integer.MAX_VALUE);
        for (int i = 0; i < order.length(); i++) {
            d[order.charAt(i) - 'a'] = i;
        }
        Character[] cs = new Character[s.length()];
        for (int i = 0; i < s.length(); i++) {
            cs[i] = s.charAt(i);
        }
        Arrays.sort(cs, new Comparator<Character>() {
            @Override
            public int compare(Character a, Character b) {
                return d[a - 'a'] - d[b - 'a'];
            }
        });
        StringBuilder sb = new StringBuilder();
        for (char c : cs) {
            sb.append(c);
        }
        return sb.toString();
    }
}
