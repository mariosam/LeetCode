/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountGoodTriplets {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countGoodTriplets( new int[]{1,2}, 1, 2, 3 ));
    }

    public static int countGoodTriplets(int[] arr, int a, int b, int c) {
        int n = arr.length;

        int count = 0;
        // First for-loop, for index 'i'.
        for (int i = 0; i < n; i++) {
            // Second for-loop for index 'j'.
            for (int j = i + 1; j < n; j++) {
                // An early check for "|arr[i] - arr[j]|", skip if the value is greater than 'a'.
                if (Math.abs(arr[i] - arr[j]) > a) continue;

                // Thrid for-loop for index 'k'.
                for (int k = j + 1; k < n; k++) {
                    // If either are greater than 'b' or 'c' respectively, skip.
                    if (Math.abs(arr[j] - arr[k]) > b || Math.abs(arr[i] - arr[k]) > c) continue;

                    // Increase the count by 1 if all 3 conditions are met.
                    count++;
                }
            }
        }
        return count;
    }
}
