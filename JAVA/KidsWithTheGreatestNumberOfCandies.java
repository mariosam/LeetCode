/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.LinkedList;
import java.util.List;

public class KidsWithTheGreatestNumberOfCandies {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", kidsWithCandies(new int[]{2,7,11,15}, 9));
    }

    public static List<Boolean> kidsWithCandies(int[] candies, int extraCandies) {
        boolean result = false;
        List<Boolean> kidsWithCandies = new LinkedList<>();
        
        for (int candy : candies) {
            int after = candy + extraCandies;

            for (int i : candies) {
                if (after >= i) {
                    result = true;
                } else {
                    result = false;
                    break;
                }
            }
            kidsWithCandies.add(result);
        }

        return kidsWithCandies;
    }

}
