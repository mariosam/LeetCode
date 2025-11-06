/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumTimeToMakeRopeColorful {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minCost( "abaac", new int[]{1,2,2,1} ));
    }

    public static int minCost(String colors, int[] neededTime) {
        int ans = 0;
        int maxNeededTime = neededTime[0];

        for (int i = 1; i < colors.length(); ++i)
            if (colors.charAt(i) == colors.charAt(i - 1)) {
                ans += Math.min(maxNeededTime, neededTime[i]);
                maxNeededTime = Math.max(maxNeededTime, neededTime[i]);
            } else {
                maxNeededTime = neededTime[i];
            }

        return ans;
    }

}
