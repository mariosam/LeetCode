/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class SeparateTheDigitsInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", separateDigits(new int[]{1, 2, 3, 4, 5}));
    }

    public static int[] separateDigits(int[] nums) {
        int n = nums.length;
        List<Integer> res = new ArrayList<>();
        for (int i = 0; i < n; i++) {
            ArrayList<Integer> cur = new ArrayList<>();
            int x = nums[i];
            while (x > 0) {
                cur.add(x % 10);
                x /= 10;
            }
            Collections.reverse(cur);
            res.addAll(cur);
        }
        int[] ans = new int[res.size()];
        int idx = 0;
        for (int x : res) {
            ans[idx] = x;
            idx++;
        }
        return ans;
    }

}
