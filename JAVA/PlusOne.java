/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.stream.IntStream;

public class PlusOne {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", plusOne(new int[]{2,7,1,5}));
    }

    public static int[] plusOne(int[] digits) {
        for ( int i = digits.length-1; i >= 0; i-- ) {
            digits[i]++;
    
            if ( digits[i] > 9 ) digits[i] = 0; else return digits;
        }
    
        return IntStream.concat( Arrays.stream(new int[]{1}), Arrays.stream(digits) ).toArray();
    }

}
