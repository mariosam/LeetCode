/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class FurthestPointFromOrigin {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", furthestDistanceFromOrigin( "_R__LL_" ));
    }

    public static int furthestDistanceFromOrigin(String moves) {
        Map<Character, Integer> movesMap = new HashMap<>();
        for (char move : moves.toCharArray()) {
            movesMap.put(move, movesMap.getOrDefault(move, 0) + 1);
        }

        int r = movesMap.getOrDefault('R', 0);
        int l = movesMap.getOrDefault('L', 0);
        int u = movesMap.getOrDefault('_', 0);

        if (r > l) {
            return u + r - l;
        } else {
            return u + l - r;
        }
    }

}
