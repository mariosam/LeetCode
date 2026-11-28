/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class SmallestUniqueSubarray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", smallestUniqueSubarray( new int[]{3,3,3} ));
    }

    public static int smallestUniqueSubarray(int[] nums) {
        int n = nums.length;

        class Checker {
            boolean check(int l) {
                Map<Long, Integer> counts = new HashMap<>();
                int[] unique = {0};

                java.util.function.LongConsumer add = h -> {
                    int count = counts.getOrDefault(h, 0) + 1;
                    counts.put(h, count);

                    if (count == 1) {
                        unique[0]++;
                    } else if (count == 2) {
                        unique[0]--;
                    }
                };
                final long base = 131;
                final long mod = 2147483647L;
                long h = 0;
                long pow = 1;

                for (int i = 0; i < l; i++) {
                    pow = pow * base % mod;
                    h = (h * base + nums[i]) % mod;
                }
                add.accept(h);

                for (int i = l; i < n; i++) {
                    h = (h * base - (long) nums[i - l] * pow % mod
                            + mod + nums[i]) % mod;
                    add.accept(h);
                }
                return unique[0] > 0;
            }
        }
        Checker checker = new Checker();
        int low = 1;
        int high = n;

        while (low < high) {
            int mid = low + (high - low) / 2;

            if (checker.check(mid)) {
                high = mid;
            } else {
                low = mid + 1;
            }
        }
        return low;
    }

}
