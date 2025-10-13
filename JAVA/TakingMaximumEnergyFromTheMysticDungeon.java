/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class TakingMaximumEnergyFromTheMysticDungeon {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumEnergy(new int[]{2,7,11,11}, 9));
    }

    public static int maximumEnergy(int[] energy, int k) {
        int n = energy.length;
        int[] f = new int[n + 1];

        for (int i = n - 1; i >= 0; i--) {
            int next = Math.min(n, i + k);
            f[i] = energy[i] + f[next];
        }

        int max = Integer.MIN_VALUE;
        for (int i = 0; i < n; i++) {
            max = Math.max(max, f[i]);
        }

        return max;
    }

}
