/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountSubarraysWithFixedBounds {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countSubarrays( new int[]{1, 3, 5, 2, 7, 5}, 1, 5 ));
    }

    public static long countSubarrays(int[] nums, int minK, int maxK) {
        int l = -1; 
        int r1 = -1;
        int r2 = -1;
        long tot = 0;

        for ( int i=0; i < nums.length; i++ ) {
            if ( nums[i] > maxK || nums[i] < minK ) l = i;
            if ( nums[i] == minK ) r1 = i;
            if ( nums[i] == maxK ) r2 = i;

            tot += Math.max(0, Math.min(r1, r2)-l);
        }

        return tot;
    }

}
