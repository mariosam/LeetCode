/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class CanMakeArithmeticProgressionFromSequence {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canMakeArithmeticProgression( new int[]{1,2,4} ));
    }

    public static boolean canMakeArithmeticProgression(int[] arr) {
        Arrays.sort(arr);

        for ( int i=0; i < arr.length-2; i++ ) {
            if ( Math.abs(arr[i]-arr[i+1]) != Math.abs(arr[i+1]-arr[i+2]) ) {
                return false;
            }
        }
        
        return true;
    }

}
