/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class JumpGameIX {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxValue( new int[]{3,2,2,3} )[0] );
    }

    public static int[] maxValue(int[] nums) {
        int n = nums.length;
        if (n == 0) return new int[0];
        int[] res = new int[nums.length];

        int[] leftmax = new int[n];
        leftmax[0] = nums[0];
        for(int i=1; i<n; i++){
            leftmax[i] = Math.max(leftmax[i-1],nums[i]);
        }

        int[] rightmin = new int[n];
        rightmin[n-1] = nums[n-1];
        for(int k=n-2; k>=0; k--){
            rightmin[k] = Math.min(rightmin[k+1],nums[k]);
        }

        res[n-1] = leftmax[n-1];
        for (int i = n - 2; i >= 0; i--) {
            res[i] = leftmax[i];
            if (leftmax[i] > rightmin[i + 1]) res[i] = res[i + 1];
        }
        return res;
    }

}
