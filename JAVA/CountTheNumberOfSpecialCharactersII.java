/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;

public class CountTheNumberOfSpecialCharactersII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfSpecialChars("aAbBcC"));
    }

    public static int numberOfSpecialChars(String word) {
        HashMap<Character, Integer> lowerLastOccurence = new HashMap<>(), upperFirstOccurence = new HashMap<>();
        int len = word.length(), ret = 0;
        for (int i = 0; i < len; i++) {
            char c = word.charAt(i);
            if (Character.isLowerCase(c)) {
                lowerLastOccurence.put(c, i);
            } else {
                upperFirstOccurence.putIfAbsent(c, i);
            }
        }
        for (int i = 0; i < 26; i++) {
            char c = (char) (i + 'A'), c2 = (char) (i + 'A' + 32);
            if (upperFirstOccurence.containsKey(c) && lowerLastOccurence.containsKey(c2) &&
                    lowerLastOccurence.get(c2) < upperFirstOccurence.get(c)) {
                ret++;
            }
        }

        return ret;
    }
}
