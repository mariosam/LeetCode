/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheDistanceValueBetweenTwoArrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findTheDistanceValue( new int[]{-5,1,5,0,-7}, new int[]{-5,1,5,0,-7}, 1 ));
    }

    public static int findTheDistanceValue(int[] arr1, int[] arr2, int d) {
        int res = 0;

        for (int i = 0; i < arr1.length; i++) {
            boolean valid = true;

            for (int j = 0; j < arr2.length; j++) {
                int delta = Math.abs(arr1[i] - arr2[j]);

                if (delta <= d) {
                    valid = false;
                    break;
                }
            }

            if (valid) {
                res++;
            }
        }
        return res;
    }
}
