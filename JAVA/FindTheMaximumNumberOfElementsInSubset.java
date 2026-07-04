/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;

public class FindTheMaximumNumberOfElementsInSubset {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumLength(new int[]{2,7,11,15}));
    }

    public static int maximumLength(int[] nums) {
        final int maxNum = Arrays.stream(nums).max().getAsInt();
        Map<Integer, Integer> count = new HashMap<>();

        for (final int num : nums)
        count.merge(num, 1, Integer::sum);

        int ans = count.containsKey(1) ? count.get(1) - (count.get(1) % 2 == 0 ? 1 : 0) : 1;

        for (final int num : nums) {
            if (num == 1)
                continue;
            int length = 0;
            long x = num;
            while (x <= maxNum && count.containsKey((int) x) && count.get((int) x) >= 2) {
                length += 2;
                x *= x;
            }
            ans = Math.max(ans, length + (count.containsKey((int) x) ? 1 : -1));
        }

        return ans;
    }

}
