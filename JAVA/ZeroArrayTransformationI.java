/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ZeroArrayTransformationI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isZeroArray( new int[]{0,1,2}, new int[][]{{1,2}} ));
    }

    public static boolean isZeroArray(int[] nums, int[][] queries) {
        int n = nums.length;
        int[] d = new int[n + 1];
        for (var q : queries) {
            int l = q[0], r = q[1];
            ++d[l];
            --d[r + 1];
        }
        for (int i = 0, s = 0; i < n; ++i) {
            s += d[i];
            if (nums[i] > s) {
                return false;
            }
        }
        return true;
    }

}
