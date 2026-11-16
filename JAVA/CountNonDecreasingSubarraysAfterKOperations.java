/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayDeque;
import java.util.Deque;

class Pair<K, V> {
    private final K key;
    private final V value;

    public Pair(K key, V value) {
        this.key = key;
        this.value = value;
    }

    public K getKey() {
        return key;
    }

    public V getValue() {
        return value;
    }
}

public class CountNonDecreasingSubarraysAfterKOperations {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countNonDecreasingSubarrays( new int[]{0}, 1 ));
    }

    public static long countNonDecreasingSubarrays(int[] nums, int k) {
        long ans = 0;
        long cost = 0;
        Deque<Pair<Integer, Integer>> dq = new ArrayDeque<>();

        for (int i = nums.length - 1, j = nums.length - 1; i >= 0; --i) {
        final int num = nums[i];
        int count = 1;
        while (!dq.isEmpty() && dq.getLast().getKey() < num) {
            final int nextNum = dq.getLast().getKey();
            final int nextCount = dq.removeLast().getValue();
            count += nextCount;
            // Adjust `nextNum`s to `num`.
            cost += (long) (num - nextNum) * nextCount;
        }
        dq.offerLast(new Pair<>(num, count));
        while (cost > k) {
            final int rightmostNum = dq.getFirst().getKey();
            final int rightmostCount = dq.removeFirst().getValue();
            cost -= (long) (rightmostNum - nums[j--]);
            if (rightmostCount > 1)
            dq.offerFirst(new Pair<>(rightmostNum, rightmostCount - 1));
        }
        ans += j - i + 1;
        }

        return ans;
    }

}
