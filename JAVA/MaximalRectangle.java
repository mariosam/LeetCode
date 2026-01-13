/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MaximalRectangle {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximalRectangle( new char[][]{{'1','0','1'},{'1','1','1'},{'1','1','1'}} ));
    }

    public static int maximalRectangle(char[][] matrix) {
        int m = matrix.length;
        if (m == 0) return 0;
        int n = matrix[0].length;
        int[] left = new int[n];
        int[] right = new int[n];
        int[] height = new int[n];

        //init
        Arrays.fill(right, n);

        int maxarea = 0;
        for (int i = 0; i < m; i++) {
            //update height
            for (int j = 0; j < n; j++) {
                if (matrix[i][j] == '1') height[j]++;
                else height[j] = 0;
            }
            //update left
            int curleft = 0;
            for (int j = 0; j < n; j++) {
                if (matrix[i][j] == '1') left[j] = Math.max(curleft, left[j]);
                else {left[j] = 0; curleft = j + 1;}
            }
            //update right
            int curright = n;
            for (int j = n - 1; j >= 0; j--) {
                if (matrix[i][j] == '1') right[j] = Math.min(curright, right[j]);
                else {right[j] = n; curright = j;}
            }

            for(int j = 0; j < n; j++) {
                maxarea = Math.max(maxarea, (right[j] - left[j]) * height[j]);
            }
        }
        return maxarea;
    }
}
