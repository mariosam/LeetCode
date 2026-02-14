/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class LongestBalancedSubstringI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestBalanced("abacaba"));
    }

    public static int longestBalanced(String s) {
        int n = s.length();
        int[] cnt = new int[26];
        int ans = 0;
        for (int i = 0; i < n; ++i) {
            Arrays.fill(cnt, 0);
            int mx = 0, v = 0;
            for (int j = i; j < n; ++j) {
                int c = s.charAt(j) - 'a';
                if (++cnt[c] == 1) {
                    ++v;
                }
                mx = Math.max(mx, cnt[c]);
                if (mx * v == j - i + 1) {
                    ans = Math.max(ans, j - i + 1);
                }
            }
        }
        return ans;
    }

}
