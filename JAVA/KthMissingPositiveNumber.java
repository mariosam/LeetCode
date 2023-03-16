/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class KthMissingPositiveNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findKthPositive( new int[]{3,2,2,3}, 4 ));
    }

    public static int findKthPositive(int[] arr, int k) {
        int positiveNaturalNumber = arr[0];
        int missingCount = arr[0] - 1;
        if ( missingCount >= k ) return k;
        
        for ( int i = 1; i < arr.length; i++ ) {
            positiveNaturalNumber++;
            if ( positiveNaturalNumber != arr[i] ) {
                missingCount++;
                i--;
                if ( missingCount == k ) return positiveNaturalNumber;
            }
        }

        return (positiveNaturalNumber) + (k - missingCount);
    }

}
