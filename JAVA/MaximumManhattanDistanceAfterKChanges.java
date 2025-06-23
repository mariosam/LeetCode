/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumManhattanDistanceAfterKChanges {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxDistance( "NWSE", 1 ));
    }

    public static int maxDistance(String s, int k) {
        int ans = 0;
        int x = 0, y = 0;

        for (int i = 0; i < s.length(); i++) {
            char dir = s.charAt(i);
            if (dir == 'N') {
                y++;
            } else if (dir == 'S') {
                y--;
            } else if (dir == 'E') {
                x++;
            } else { // 'W'
                x--;
            }

            int manhattan = Math.abs(x) + Math.abs(y) + k * 2;
            ans = Math.max(ans, Math.min(manhattan, i + 1));
        }

        return ans;
    }
}
