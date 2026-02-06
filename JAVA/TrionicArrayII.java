/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class TrionicArrayII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxSumTrionic( new int[]{0,-2,-1,-3,0,2,-1} ));
    }

    public static long maxSumTrionic(int[] nums) {
        int n = nums.length;
        int i = 0;
        long ans = Long.MIN_VALUE;

        while (i < n) {
            int l = i;

            i++;
            while (i < n && nums[i - 1] < nums[i]) i++;
            if (i == l + 1) continue;

            int p = i - 1;
            long s = (long) nums[p - 1] + nums[p];

            while (i < n && nums[i - 1] > nums[i]) {
                s += nums[i];
                i++;
            }
            if (i == p + 1 || i == n || nums[i - 1] == nums[i]) continue;

            int q = i - 1;
            s += nums[i];
            i++;

            long mx = 0, t = 0;
            while (i < n && nums[i - 1] < nums[i]) {
                t += nums[i];
                mx = Math.max(mx, t);
                i++;
            }
            s += mx;

            mx = 0;
            t = 0;
            for (int j = p - 2; j >= l; j--) {
                t += nums[j];
                mx = Math.max(mx, t);
            }
            s += mx;

            ans = Math.max(ans, s);
            i = q;
        }

        return ans;
    }

}
