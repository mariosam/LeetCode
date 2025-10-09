/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ContainerWithMostWater {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxArea( new int[]{1,22,1} ));
    }

    public static int maxArea(int[] height) {
        int max = 0;
        int i = 0, j = height.length - 1;

        while (i < j) {
            int width = j - i;
            int area = width * Math.min(height[i], height[j]);
            max = Math.max(max, area);

            if (height[i] < height[j]) {
                i++;
            } else {
                j--;
            }
        }

        return max;
    }

}
