/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SortedGCDPairQueries {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", gcdValues(new int[]{2,7,11,15}, new long[]{1,2,3}));
    }

    public static int[] gcdValues(int[] nums, long[] queries) {
        int mx = 0;
        for (int x : nums) {
            mx = Math.max(mx, x);
        }
        long[] cntX = new long[mx + 1];
        long[] cntGcd = new long[mx + 1];

        for (int x : nums) {
            cntX[x]++;
        }

        for (int i = mx; i > 0; i--) {
            long cnt = 0;

            for (int j = i; j <= mx; j += i) {
                cnt += cntX[j];
                cntGcd[i] -= cntGcd[j];
            }
            cntGcd[i] += cnt * (cnt - 1) / 2;
        }

        for (int i = 1; i <= mx; i++) {
            cntGcd[i] += cntGcd[i - 1];
        }
        int[] ans = new int[queries.length];

        for (int i = 0; i < queries.length; i++) {
            long target = queries[i] + 1;
            int left = 0;
            int right = cntGcd.length;

            while (left < right) {
                int mid = left + (right - left) / 2;
                if (cntGcd[mid] < target) {
                    left = mid + 1;
                } else {
                    right = mid;
                }
            }
            ans[i] = left;
        }
        return ans;
    }

}
