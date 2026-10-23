/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class FindTargetIndicesAfterSortingArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", targetIndices( new int[]{1,4,2,5}, 2 ));
    }

    public static List<Integer> targetIndices(int[] nums, int target) {
        Arrays.sort(nums);

        List<Integer> ans = new ArrayList<>();

        for(int i = 0; i < nums.length; i++) {
            if(nums[i] == target) ans.add(i);
         }

         return ans.size() == 0? new ArrayList<Integer>() : ans;
    }
}
