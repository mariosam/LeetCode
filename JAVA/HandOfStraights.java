/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;

public class HandOfStraights {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isNStraightHand( new int[]{1,2,3,4,5}, 4 ));
    }

    public static boolean isNStraightHand(int[] hand, int groupSize) {
        if (hand.length % groupSize != 0) {
            return false;
        }
        
        Map<Integer, Integer> cnt = new HashMap<>();
        for (int v : hand) {
            cnt.put(v, cnt.getOrDefault(v, 0) + 1);
        }
        
        Arrays.sort(hand);
        
        for (int v : hand) {
            if (cnt.containsKey(v) && cnt.get(v) > 0) {
                for (int x = v; x < v + groupSize; x++) {
                    if (!cnt.containsKey(x) || cnt.get(x) == 0) {
                        return false;
                    }
                    cnt.put(x, cnt.get(x) - 1);
                }
            }
        }
        
        return true;
    }

}
