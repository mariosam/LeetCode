/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class MinimumPairRemovalToSortArrayI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumPairRemoval( new int[]{1,2,2,1} ));
    }

    public static int minimumPairRemoval(int[] nums) {
        List<Integer> arr = new ArrayList<>();
        for (int x : nums) {
            arr.add(x);
        }
        int ans = 0;
        while (!isNonDecreasing(arr)) {
            int k = 0;
            int s = arr.get(0) + arr.get(1);
            for (int i = 1; i < arr.size() - 1; ++i) {
                int t = arr.get(i) + arr.get(i + 1);
                if (s > t) {
                    s = t;
                    k = i;
                }
            }
            arr.set(k, s);
            arr.remove(k + 1);
            ++ans;
        }
        return ans;
    }

    private static boolean isNonDecreasing(List<Integer> arr) {
        for (int i = 1; i < arr.size(); ++i) {
            if (arr.get(i) < arr.get(i - 1)) {
                return false;
            }
        }
        return true;
    }
}
