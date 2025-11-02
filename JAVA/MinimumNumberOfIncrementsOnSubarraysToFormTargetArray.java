/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumNumberOfIncrementsOnSubarraysToFormTargetArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minNumberOperations( new int[]{1,2,2,1} ));
    }

    public static int minNumberOperations(int[] target) {
        int ans = target[0];
        for(int i = 1; i < target.length; i++){
            if(target[i] > target[i-1])
                ans += target[i] - target[i-1];
        }
        return ans;
    }
}
