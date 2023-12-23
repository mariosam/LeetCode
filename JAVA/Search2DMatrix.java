/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class Search2DMatrix {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", searchMatrix( new int[][]{{3,2,2,3}}, 5 ));
    }

    public static boolean searchMatrix(int[][] matrix, int target) {
        int len1 = matrix.length;
        if (len1 == 0) {
            return false;
        }
        int len2 = matrix[0].length;
        int left = 0, right = len1 * len2 - 1;

        while (left <= right) {
            int mid = (left + right) / 2;
            int x = mid / len2;
            int y = mid % len2;

            if (matrix[x][y] == target) {
                return true;
            } else if (matrix[x][y] < target) {
                left = mid + 1;
            } else {
                right = mid - 1;
            }
        }

        return false;
    }

}
