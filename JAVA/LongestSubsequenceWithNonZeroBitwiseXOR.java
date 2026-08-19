/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LongestSubsequenceWithNonZeroBitwiseXOR {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestSubsequence( new int[]{1,2,3,4} ));
    }

    public static int longestSubsequence(int[] nums) {
        int xor = 0, cnt0 = 0;
        int n = nums.length;
        for (int x : nums) {
            xor ^= x;
            cnt0 += x == 0 ? 1 : 0;
        }
        if (xor != 0) {
            return n;
        }
        return cnt0 == n ? 0 : n - 1;
    }

}
