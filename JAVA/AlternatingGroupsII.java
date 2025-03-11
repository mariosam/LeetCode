/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class AlternatingGroupsII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numberOfAlternatingGroups( new int[]{5}, 5 ));
    }

    public static int numberOfAlternatingGroups(int[] colors, int k) {
        int n = colors.length;
        int res = 0, cnt = 1;

        for (int i = -k + 2; i < n; i++) {
            int idx1 = (i + n) % n;
            int idx2 = (i - 1 + n) % n;

            if (colors[idx1] != colors[idx2]) {
                cnt++;
            } else {
                cnt = 1;
            }

            if (cnt >= k) {
                res++;
            }
        }
        return res;
    }

}
