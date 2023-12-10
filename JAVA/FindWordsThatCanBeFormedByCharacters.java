/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class FindWordsThatCanBeFormedByCharacters {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countCharacters( new String[]{"cat","bt","hat","tree"}, "atach" ));
    }

    public static int countCharacters(String[] words, String chars) {
        Map<Character, Integer> cnt = new HashMap<>();
        int res = 0;

        for (char ch : chars.toCharArray()) {
            cnt.put(ch, cnt.getOrDefault(ch, 0) + 1);
        }

        for (String word : words) {
            Map<Character, Integer> tmp = new HashMap<>();
            boolean match = true;

            for (char ch : word.toCharArray()) {
                tmp.put(ch, tmp.getOrDefault(ch, 0) + 1);
                if (tmp.get(ch) > cnt.getOrDefault(ch, 0)) {
                    match = false;
                    break;
                }
            }

            if (match) {
                res += word.length();
            }
        }

        return res;
    }
}
