/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountNumberOfNiceSubarrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfSubarrays( new int[]{0}, 10 ));
    }

    public static int numberOfSubarrays(int[] nums, int k) {
        int n = nums.length;
        int[] s = new int[n + 1];
        int[] cnt = new int[n + 1];
        int ans = 0;
        
        cnt[0]++;
        for (int i = 1; i <= n; i++) {
            s[i] = s[i - 1] + nums[i - 1] % 2;
            cnt[s[i]]++;
        }
        
        for (int i = 1; i <= n; i++) {
            if (s[i] >= k) {
                ans += cnt[s[i] - k];
            }
        }

        return ans;
    }

}
