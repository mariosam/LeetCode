/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class CountNumberOfTrapezoidsI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countTrapezoids( new int[][] { {1,0}, {2,0}, {3,0}, {2,2}, {3,2} } ));
    }

    public static int countTrapezoids(int[][] points) {
        final int mod = (int) 1e9 + 7;
        Map<Integer, Integer> cnt = new HashMap<>();
        for (var p : points) {
            cnt.merge(p[1], 1, Integer::sum);
        }
        long ans = 0, s = 0;
        for (int v : cnt.values()) {
            long t = 1L * v * (v - 1) / 2;
            ans = (ans + s * t) % mod;
            s += t;
        }
        return (int) ans;
    }

}
