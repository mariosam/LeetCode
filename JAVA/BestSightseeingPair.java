/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class BestSightseeingPair {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxScoreSightseeingPair( new int[]{5} ));
    }

    public static int maxScoreSightseeingPair(int[] values) {
        int ans = 0;
        int mx = values[0];
        for (int i = 1; i < values.length; i++) {
            ans = Math.max(ans, values[i] - i + mx);
            mx = Math.max(mx, values[i] + i);
        }
        return ans;
    }

}
