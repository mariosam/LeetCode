/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class FindAllKDistantIndicesInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findKDistantIndices( new int[]{5,5,5}, 9, 1 ));
    }

    public static List<Integer> findKDistantIndices(int[] nums, int key, int k) {
        List<Integer> ans = new ArrayList<>();
        List<Integer> keyIndices = new ArrayList<>();
        for (int i = 0; i < nums.length; i++) {
            if (nums[i] == key) {
                keyIndices.add(i);
            }
        }
        for (int i = 0; i < nums.length; i++) {
            for (int j = 0; j < keyIndices.size(); j++) {
                if (Math.abs(i - keyIndices.get(j)) <= k) {
                    ans.add(i);
                    break;
                }
            }
        }
        Collections.sort(ans);
        return ans;
    }

}
