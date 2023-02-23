/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class SingleElementInSortedArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", singleNonDuplicate( new int[]{3,2,2,3} ));
    }

    public static int singleNonDuplicate(int[] nums) {
        if ( nums.length == 1 ) return nums[0];
        Arrays.sort(nums);
        if ( nums[0] != nums[1] ) return nums[0];

        try {
            for ( int i=1; i < nums.length; i++ ) {
                if ( nums[i] != nums[i-1] && nums[i] != nums[i+1] ) return nums[i];
            }
        } catch (Exception e) {}

        return nums[nums.length-1];
    }

}
