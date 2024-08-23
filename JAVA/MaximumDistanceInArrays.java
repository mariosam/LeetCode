/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class MaximumDistanceInArrays {

    public static void main(String[] args) {
        List<List<Integer>> arrays = new ArrayList<>();
        arrays.add(Arrays.asList(1, 2, 3));
        arrays.add(Arrays.asList(4, 5));
        System.out.printf("Resultado: %d\n", maxDistance( arrays ));
    }

    public static int maxDistance(List<List<Integer>> arrays) {
        int curMin = Collections.min(arrays.get(0));
        int curMax = Collections.max(arrays.get(0));

        int result = 0;
        for (int i = 1; i < arrays.size(); i++) {
            int newMin = Collections.min(arrays.get(i));
            int newMax = Collections.max(arrays.get(i));

            result = Math.max(result, Math.abs(newMax - curMin));
            result = Math.max(result, Math.abs(curMax - newMin));

            curMin = Math.min(curMin, newMin);
            curMax = Math.max(curMax, newMax);
        }
        return result;
    }
}
