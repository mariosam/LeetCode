/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfEquivalentDominoPairs {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numEquivDominoPairs( new int[][]{{1,2},{2,1},{3,4},{5,6}} ));
    }

    public static int numEquivDominoPairs(int[][] dominoes) {
        int[] cnt = new int[100];
        int res = 0;

        for (int[] v : dominoes) {
            int a = Math.min(v[0], v[1]);
            int b = Math.max(v[0], v[1]);
            int k = a * 10 + b;
            res += cnt[k];
            cnt[k]++;
        }

        return res;
    }

}
