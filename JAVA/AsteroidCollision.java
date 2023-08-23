/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class AsteroidCollision {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", asteroidCollision( new int[]{1,2,3,0,0,0} ));
    }

    public static int[] asteroidCollision(int[] asteroids) {
        List<Integer> ans = new ArrayList<>();

        for (int i = 0; i < asteroids.length; i++) {
            ans.add(asteroids[i]);

            int j = ans.size() - 1;
            while (j >= 1) {
                if (ans.get(j) == 0) {
                    ans.remove(j);
                    break;
                }

                if (ans.get(j - 1) < 0 || ans.get(j) > 0) {
                    break;
                }

                if (ans.get(j - 1) == -ans.get(j)) {
                    ans.remove(j);
                    ans.remove(j - 1);
                    j--;
                } else if (ans.get(j - 1) > -ans.get(j)) {
                    ans.remove(j);
                    break;
                } else {
                    ans.set(j - 1, ans.get(j));
                    ans.remove(j);
                }

                j--;
            }
        }

        return ans.stream().mapToInt(Integer::intValue).toArray();
    }

}
