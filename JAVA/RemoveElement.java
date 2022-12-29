/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class RemoveElement {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", removeElement( new int[]{3,2,2,3}, 3 ));
    }

    public static int removeElement(int[] nums, int val) {
        int count = 0;

        for ( int i=0; i < nums.length; i++ ) {
            if ( nums[i] == val ) nums[i] = '_'; else count++;
        }
        Arrays.sort( nums );

        return count;
    }

}
