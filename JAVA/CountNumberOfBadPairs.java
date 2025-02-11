/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;

public class CountNumberOfBadPairs {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countBadPairs( new int[]{0} ));
    }

    public static long countBadPairs(int[] nums) {
        long ans=0, n=nums.length;
        HashMap<Integer, Integer> counter=new HashMap<>();

        for(int i=nums.length-1;i>=0;i--){
            int diff=nums[i]-i;
            if(counter.containsKey(diff))
                ans+=counter.get(diff);
            if(counter.containsKey(diff))
                counter.put(diff, counter.get(diff)+1);
            else
                counter.put(diff, 1);
        }
        return (n*(n-1)/2)-ans;
    }

}
