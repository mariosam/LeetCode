/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class WordBreak {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", wordBreak( "leetcode", new ArrayList<String>() ));
    }

    public static boolean wordBreak(String s, List<String> wordDict) {
        int sLen = s.length();
        boolean[] dp = new boolean[sLen + 1];
        dp[0] = true;

        for (int i = 1; i <= sLen; i++) {
            for (String word : wordDict) {
                int l = word.length();
                if (l <= i && word.equals(s.substring(i - l, i))) {
                    dp[i] = dp[i - l] || dp[i];
                }
            }
        }

        return dp[sLen];
    }

}
