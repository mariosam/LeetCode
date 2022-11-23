/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SearchInsertPosition {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", searchInsert( new int[]{3,2,2,3}, 5 ));
    }

    public static int searchInsert(int[] nums, int target) {
        for ( int i=0; i < nums.length; i++ ) {
            if ( nums[i] >= target ) return i;
        }
        return nums.length;
    }

}
