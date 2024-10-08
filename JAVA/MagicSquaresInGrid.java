/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MagicSquaresInGrid {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numMagicSquaresInside( new int[][]{{3,2,2,3}} ));
    }

    public static int numMagicSquaresInside(int[][] grid) {
        if (grid == null || grid.length < 3 || grid[0].length < 3) 
              return 0;
          int R = grid.length, C = grid[0].length;
          int count = 0;
          for (int r = 0; r <= R - 3; ++r) {
              for (int c = 0; c <= C - 3; ++c) {
                  if (grid[r + 1][c + 1] == 5 && isMagic(grid, r, c)) {//middle element of magic grid will always be 5
                      count++;
                  }
              }
          }
          return count;
    }

    private static  boolean isMagic(int[][] grid, int r, int c) {
        int[] counts = new int[9];
        for (int i = 0; i < 3; ++i) {
            int rSum = 0, cSum = 0;
            for (int j = 0; j < 3; ++j) {
                rSum += grid[r + i][c + j];
                cSum += grid[r + j][c + i];
                int t = grid[r + i][c + j];
                if (t > 9 || t < 1 || counts[t - 1]++ > 0) 
                    return false;
            }
            if (rSum != 15 || cSum != 15) 
                return false;
        }
        return true;
    }

}
