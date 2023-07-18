/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class LongestArithmeticSubsequenceOfGivenDifference {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestSubsequence( new int[]{1,3}, 1 ));
    }

    public static int longestSubsequence(int[] arr, int difference) {
        Map<Integer, Integer> dp = new HashMap<>();
        int ans = 1;

        for (int num : arr) {
            dp.put(num, dp.getOrDefault(num - difference, 0) + 1);
            ans = Math.max(ans, dp.get(num));
        }
        
        return ans;
    }

}
