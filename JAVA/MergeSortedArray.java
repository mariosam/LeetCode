/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MergeSortedArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", merge( new int[]{1,2,3,0,0,0}, 3, new int[]{2,5,6}, 3 ));
    }

    public static int[] merge(int[] nums1, int m, int[] nums2, int n) {
        for ( int i=m, j=0; i < nums1.length; i++, j++ ) {
            nums1[i] = nums2[j];
        }
        
        Arrays.sort( nums1 );
    
        if ( m == 0 ) nums1 = nums2;
    
        return nums1; //comentar essa linha no leetcode pq o return eh void.
    }

}
