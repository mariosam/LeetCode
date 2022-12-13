/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class TwoSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", twoSum(new int[]{2,7,11,15}, 9));
    }

    public static int[] twoSum(int[] nums, int target) {
        for ( int x=0; x < nums.length; x++ ) {
            for ( int y=x+1; y < nums.length; y++ ) {
                if ( nums[x] + nums[y] == target ) {
                    return new int[] {x, y};
                }
            }
        }

        return nums;
    }

}
