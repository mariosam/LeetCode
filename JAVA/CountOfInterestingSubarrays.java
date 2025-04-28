/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class CountOfInterestingSubarrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countInterestingSubarrays( Arrays.asList(3,2,4), 2, 1 ));
    }

    public static long countInterestingSubarrays(List<Integer> nums, int modulo, int k) {
        long ans = 0;
        int prefix = 0; // (number of nums[i] % modulo == k so far) % modulo
        Map<Integer, Integer> prefixCount = new HashMap<>();
        prefixCount.put(0, 1);

        for (final int num : nums) {
        if (num % modulo == k)
            prefix = (prefix + 1) % modulo;
        ans += prefixCount.getOrDefault((prefix - k + modulo) % modulo, 0);
        prefixCount.merge(prefix, 1, Integer::sum);
        }

        return ans;
    }

}
