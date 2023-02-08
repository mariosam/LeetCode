/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class FirstMissingPositive {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", firstMissingPositive( new int[]{1,2,2,1} ));
    }

    public static int firstMissingPositive(int[] nums) {
        Arrays.sort(nums);
        int l = nums.length;
        int start = -1;

        for ( int i = 0; i < l; i++ ) {
            if ( nums[i] > 0 ) {
                start = i;
                break;
            }
        }
        if ( start == -1 ) return 1;

        int currentL = l - start;
        if ( currentL == 0 ) return 1;
        if ( nums[start] > 1 ) return 1;

        for ( int i = start; i < l-1; i++ ) {
            if ( nums[i+1]-nums[i] > 1 ) {
                return nums[i] + 1;
            }
        }

        return nums[l-1] + 1;
    }
}
