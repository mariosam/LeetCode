/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;

public class LongestSquareStreakinAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestSquareStreak( new int[]{1,2,3} ));
    }

    public static int longestSquareStreak(int[] nums) {
        Arrays.sort(nums);
        Map<Integer,Integer> map = new HashMap<>();
        int result =- 1;
        for (int x : nums){
            int perfect = (int) Math.sqrt(x);
            if (perfect * perfect == x && map.containsKey(perfect)) {
                map.put(x, map.get(perfect) + 1);
                result = Math.max((map.get(perfect) + 1), result);   
            } else {
                map.put(x,1);
            }
        }  
        return result;
    }

}
