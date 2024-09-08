/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class FindMissingObservations {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", missingRolls( new int[]{5,5,5}, 5, 5 ));
    }

    public static int[] missingRolls(int[] rolls, int mean, int n) {
        int totalSum = mean * (rolls.length + n);
        int currentSum = Arrays.stream(rolls).sum();
        int sum = totalSum - currentSum;

        if (sum < n || sum > 6 * n) {
            return new int[0]; // Return an empty array if the required sum is out of bounds
        }

        int[] result = new int[n];
        int x = sum / n;
        int y = sum % n;

        for (int i = 0; i < n; i++) {
            if (i < y) {
                result[i] = x + 1;
            } else {
                result[i] = x;
            }
        }

        return result;
    }

}
