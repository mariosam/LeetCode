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

public class MinimumIndexOfValidSplit {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", inimumIndex( Arrays.asList(1, 2, 2) ));
    }

    public static int inimumIndex(List<Integer> nums) {
        Map<Integer, Integer> freq = new HashMap<>();
        int x = nums.get(0);

        for (int num : nums) {
            freq.put(num, freq.getOrDefault(num, 0) + 1);
            if (freq.get(num) > freq.get(x)) {
                x = num;
            }
        }

        int total = freq.get(x);
        int freq1 = 0;

        for (int i = 0; i < nums.size(); i++) {
            if (nums.get(i) == x) {
                freq1++;
            }
            if (freq1 * 2 > i + 1 && (total - freq1) * 2 > (nums.size() - i - 1)) {
                return i;
            }
        }

        return -1;
    }
}
