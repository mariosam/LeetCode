/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class CountEqualAndDivisiblePairsInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countPairs( new int[]{1,2}, 3 ));
    }

    public static int countPairs(int[] nums, int k) {
        Map<Integer, List<Integer>> map = new HashMap<>();

        for (int i = 0; i < nums.length; i++) {
            map.computeIfAbsent(nums[i], v -> new ArrayList<>()).add(i);
        }

        int result = 0;
        for (List<Integer> indices : map.values()) {
            for (int i = 0; i < indices.size() - 1; i++) {
                for (int j = i + 1; j < indices.size(); j++) {
                    if ((indices.get(i) * indices.get(j)) % k == 0) {
                        result++;
                    }
                }
            }
        }

        return result;
    }
}
