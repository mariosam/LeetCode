/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountNegativeNumbersInSortedMatrix {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countNegatives( new int[][]{{1,2},{2,1}} ));
    }

    public static int countNegatives(int[][] grid) {
        int neg = 0;

        for ( int i=0; i < grid.length; i++ ) {
            for ( int j=0; j < grid[i].length; j++ ) {
                if ( grid[i][j] < 0 ) {
                    neg += grid[i].length - j;
                    break;
                }
            }
        }

        return neg;
    }
}
