/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class SuccessfulPairsOfSpellsAndPotions {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", successfulPairs(new int[]{2,7,11,15}, new int[]{1,1,1}, 9));
    }

    public static int[] successfulPairs(int[] spells, int[] potions, long success) {
        int n = spells.length, m = potions.length;
        Arrays.sort(potions);
        int[] pairs = new int[n];

        for (int i = 0; i < n; i++) {
            int left = 0, right = m - 1;

            while (left < right) {
                int mid = (right - left) / 2 + left;
                
                if (potions[mid] * (long)spells[i] >= success) {
                    right = mid;
                } else {
                    left = mid + 1;
                }
            }

            if (potions[left] * (long)spells[i] < success) {
                left++;
            }
            pairs[i] = m - left;
        }

        return pairs;
    }

}
