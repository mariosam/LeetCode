/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class FindMissingElements {

    public static void main(String[] args) {
        System.out.println("Resultado: " + findMissingElements(new int[]{5,5,5}));
    }

    public static List<Integer> findMissingElements(int[] nums) {
        List<Integer> list = new ArrayList<>();
        List<Integer> ans = new ArrayList<>();

        int min = Arrays.stream(nums).min().orElse(Integer.MAX_VALUE);
        int max = Arrays.stream(nums).max().orElse(Integer.MIN_VALUE);

        for(int i=min; i<max; i++){
            list.add(i);
        }

        for(int e : list){
            boolean found = false;
            for(int num : nums){
                if(e == num){
                    found = true;
                    break;
                }
            }

            if(!found){
                ans.add(e);
            }
        }
        return ans;
    }

}
