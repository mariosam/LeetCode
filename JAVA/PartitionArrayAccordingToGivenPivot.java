/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class PartitionArrayAccordingToGivenPivot {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", pivotArray( new int[]{3,2,2}, 1 ));
    }

    public static int[] pivotArray(int[] nums, int pivot) {
        int[] res = new int[nums.length];
        int k = 0;
        for(int i=0;i<nums.length;i++){
            if(nums[i] < pivot){
                res[k++] = nums[i];
            }
        }
        
        for(int i=0;i<nums.length;i++){
            if(nums[i] == pivot){
                res[k++] = nums[i];
            }
        }
        
        for(int i=0;i<nums.length;i++){
            if(nums[i] > pivot){
                res[k++] = nums[i];
            }
        }
        
        return res;
    }

}
