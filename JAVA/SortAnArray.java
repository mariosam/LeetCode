/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class SortAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", sortArray(new int[]{2,7,11,15}));
    }

    public static int[] sortArray(int[] nums) {
        int[][] arr = new int[50001][2];
        List<Integer> ans = new ArrayList<>(nums.length);

        for (int num : nums) {
            int n = num;
            int s = 1;
            if (n < 0) {
                n *= -1;
                s--;
            }
            arr[n][s]++;
        }

        for (int i = 50000; i >= 0; i--) {
            for (int j = arr[i][0]; j > 0; j--) {
                ans.add(i * -1);
            }
        }

        for (int i = 0; i <= 50000; i++) {
            for (int j = arr[i][1]; j > 0; j--) {
                ans.add(i);
            }
        }

        int[] result = new int[ans.size()];
        for (int i = 0; i < ans.size(); i++) {
            result[i] = ans.get(i);
        }

        return result;
    }

}
