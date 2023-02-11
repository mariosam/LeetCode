/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MedianOfTwoSortedArrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findMedianSortedArrays( new int[]{1,3}, new int[]{2} ));
    }

    public static double findMedianSortedArrays(int[] nums1, int[] nums2) {
        int[] ar = Arrays.copyOf(nums1, nums1.length + nums2.length);
        System.arraycopy(nums2, 0, ar, nums1.length, nums2.length);
        Arrays.sort( ar );

        if ( ar.length%2 == 0 ) {
            double n1 = ar[ar.length/2];
            double n2 = ar[(ar.length/2)-1];

            return ( n1 + n2 )/2;
        }

        return ar[(ar.length-1)/2];
    }
}
