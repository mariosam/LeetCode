/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumCommonValue {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", getCommon( new int[]{1,2,2,1}, new int[]{1,2,2,1} ));
    }

    public static int getCommon(int[] nums1, int[] nums2) {
        int m = nums1.length, n = nums2.length;
        for (int i = 0, j = 0; i < m && j < n;) {
            if (nums1[i] == nums2[j]) {
                return nums1[i];
            }
            if (nums1[i] < nums2[j]) {
                ++i;
            } else {
                ++j;
            }
        }
        return -1;
    }
}
