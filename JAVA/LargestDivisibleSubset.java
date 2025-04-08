/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class LargestDivisibleSubset {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", largestDivisibleSubset( new int[]{1,2,3} ));
    }

    public static List<Integer> largestDivisibleSubset(int[] nums) {
        Arrays.sort(nums);
        List<List<Integer>> subset = new ArrayList<>();
        for (int num : nums) {
            subset.add(new ArrayList<>(List.of(num)));
        }

        List<Integer> result = new ArrayList<>();

        for (int i = 0; i < nums.length; i++) {
            for (int j = i - 1; j >= 0; j--) {
                if (subset.get(i).size() > subset.get(j).size()) continue;
                boolean satisfied = true;
                for (int k : subset.get(j)) {
                    if (k % nums[i] != 0 && nums[i] % k != 0) {
                        satisfied = false;
                        break;
                    }
                }
                if (satisfied) {
                    List<Integer> newList = new ArrayList<>();
                    newList.add(nums[i]);
                    newList.addAll(subset.get(j));
                    subset.set(i, newList);
                }
            }
            if (subset.get(i).size() > result.size()) {
                result = subset.get(i);
            }
        }

        return result;
    }

}
