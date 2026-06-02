/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class DestroyingAsteroids {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", asteroidsDestroyed(10, new int[]{3, 9, 19, 5, 21}));
    }

    public static boolean asteroidsDestroyed(int mass, int[] asteroids) {
        long total = mass;
        Arrays.sort(asteroids);
        for (int asteroid : asteroids) {
            if (asteroid > total) {
                return false;
            }
            total += asteroid;
        }
        return true;
    }
}
