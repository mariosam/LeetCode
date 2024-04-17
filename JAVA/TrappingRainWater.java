/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class TrappingRainWater {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", trap(new int[]{2,7,11,11}));
    }

    public static int trap(int[] height) {
        int n = height.length, idx = 0, lefth = 0, righth = 0, area = 0;
        for (int i = 0; i < n; i++)
            idx = height[idx] <= height[i] ? i : idx;
        for (int i = 0; i < idx; i++) {
            if (height[i] < lefth)
                area += lefth - height[i];
            else
                lefth = height[i];
        }
        for (int i = n - 1; i > idx; i--) {
            if (height[i] < righth)
                area += righth - height[i];
            else
                righth = height[i];
        }
        return area;
    }

}
