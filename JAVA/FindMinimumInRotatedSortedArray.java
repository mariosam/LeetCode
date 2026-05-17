/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindMinimumInRotatedSortedArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findMin( new int[]{5,5,5} ));
    }

    public static int findMin(int[] nums) {
        int min = nums[0];
        for(int i = 0; i < nums.length; i++){
            if(nums[i]<min){
                return nums[i];
            }
        }
        return min;
    }

}
