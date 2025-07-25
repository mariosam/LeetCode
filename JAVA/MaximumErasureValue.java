/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class MaximumErasureValue {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumUniqueSubarray( new int[]{1,2,2,1} ));
    }

    public static int maximumUniqueSubarray(int[] nums) {
        int l = 0, r = 0;
        Map<Integer, Integer> cnt = new HashMap<>();
        int sum = 0, ans = 0;

        while (r < nums.length) {
            int num = nums[r];
            sum += num;
            r++;
            cnt.put(num, cnt.getOrDefault(num, 0) + 1);

            while (cnt.get(num) > 1) {
                int out = nums[l];
                l++;
                sum -= out;
                cnt.put(out, cnt.get(out) - 1);
            }

            ans = Math.max(ans, sum);
        }

        return ans;
    }
}
