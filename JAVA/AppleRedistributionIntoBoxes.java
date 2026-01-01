/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class AppleRedistributionIntoBoxes {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumBoxes( new int[]{1,2,3,0,0,0}, new int[]{1,2,3} ));
    }

    public static int minimumBoxes(int[] apple, int[] capacity) {
        int numberOfApples = 0;

        for (int count: apple) {
        numberOfApples += count;
        }

        Arrays.sort(capacity);

        int m = capacity.length;
        int boxCapacity = 0;
        int numberOfBoxes = 0;

        for (int i = m - 1; i >= 0; i--) {
        boxCapacity += capacity[i];
        numberOfBoxes++;

        if (boxCapacity >= numberOfApples) {
            break;
        }
        }

        return numberOfBoxes;
    }

}
