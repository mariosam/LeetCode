/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class BuildArrayFromPermutation {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", buildArray( new int[]{1,2,3,0,0,0} ));
    }

    public static int[] buildArray(int[] nums) {
        int[] res = new int[nums.length];
        for(int i=0;i<nums.length;i++){
            res[i] = nums[nums[i]];
        }
        
        return res;
    }

}
