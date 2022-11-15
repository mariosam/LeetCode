/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RemoveDuplicatesFromSortedArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", removeDuplicates( new int[]{3,2,2,3} ));
    }

    public static int removeDuplicates(int[] nums) {
        int count = 1;

        for ( int i = 1; i < nums.length; i++ ) {
            if ( nums[i] != nums[i-1] ) {
                nums[count] = nums[i];
                count++;
            }
        }
        
        return count;
    }

}
