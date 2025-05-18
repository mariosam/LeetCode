/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class LongestUnequalAdjacentGroupsSubsequenceII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", getWordsInLongestSubsequence( new String[]{"a","b","c","d"}, new int[]{1,2,3} ));
    }

    public static List<String> getWordsInLongestSubsequence(String[] words, int[] groups) {
        int n = words.length;
        int[] dp = new int[n];
        int[] arr = new int[n];
        Arrays.fill(dp, 1);
        int idx = 0;

        for (int i = n - 1; i >= 0; --i) {
            String s = words[i];
            for (int j = i + 1; j < n; ++j) {
                if (groups[i] == groups[j] || s.length() != words[j].length()) continue;

                String t = words[j];
                int diff = 0;
                for (int k = 0; k < s.length(); ++k) {
                    if (s.charAt(k) != t.charAt(k)) {
                        diff++;
                        if (diff > 1) break;
                    }
                }

                if (diff != 1) continue;

                int next = dp[j] + 1;
                if (next > dp[i]) {
                    dp[i] = next;
                    arr[i] = j;
                }
                if (next > dp[idx]) {
                    idx = i;
                }
            }
        }

        List<String> res = new ArrayList<>();
        int i = idx;
        res.add(words[i]);
        while (dp[i] > 1) {
            i = arr[i];
            res.add(words[i]);
        }

        return res;
    }

}
