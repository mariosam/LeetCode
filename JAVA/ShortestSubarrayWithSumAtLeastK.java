/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Deque;
import java.util.LinkedList;

public class ShortestSubarrayWithSumAtLeastK {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", shortestSubarray( new int[]{3,2,2,3}, 3 ));
    }

    public static int shortestSubarray(int[] nums, int k) {
        int n = nums.length;
        long[] s = new long[n + 1];
        for (int i = 0; i < n; i++) {
            s[i + 1] = s[i] + nums[i];
        }

        Deque<Integer> q = new LinkedList<>();
        int ans = n + 1;

        for (int i = 0; i < s.length; i++) {
            while (!q.isEmpty() && s[i] - s[q.peekFirst()] >= k) {
                ans = Math.min(ans, i - q.pollFirst());
            }
            while (!q.isEmpty() && s[q.peekLast()] >= s[i]) {
                q.pollLast();
            }
            q.addLast(i);
        }

        return ans > n ? -1 : ans;
    }

}
