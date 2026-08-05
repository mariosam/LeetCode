/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumNumberOfPushesToTypeWordII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumPushes("abcde"));
    }

    public static int minimumPushes(String word) {
        int[] cnt = new int[26];
        for (int i = 0; i < word.length(); ++i) {
            ++cnt[word.charAt(i) - 'a'];
        }
        Arrays.sort(cnt);
        int ans = 0;
        for (int i = 0; i < 26; ++i) {
            ans += (i / 8 + 1) * cnt[26 - i - 1];
        }
        return ans;
    }
}
