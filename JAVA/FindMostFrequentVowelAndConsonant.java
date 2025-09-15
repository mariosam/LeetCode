/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindMostFrequentVowelAndConsonant {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxFreqSum( "successes" ));
    }

    public static int maxFreqSum(String s) {
        int[] cnt = new int[26];
        for (char c : s.toCharArray()) {
            cnt[c - 'a']++;
        }

        int a = 0, b = 0;
        for (int i = 0; i < 26; i++) {
            char c = (char) (i + 'a');
            if ("aeiou".indexOf(c) != -1) {
                a = Math.max(a, cnt[i]);
            } else {
                b = Math.max(b, cnt[i]);
            }
        }
        return a + b;
    }

}
