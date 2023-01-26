/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MatrixDiagonalSum {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", diagonalSum( new int[][]{{1,2},{2,1}} ));
    }

    public static int diagonalSum(int[][] mat) {
        //se possui apenas 1 elemento no array
        if ( mat.length == 1 ) return mat[0][0];
        
        int sum = 0;
        //percorre diagonal: iniciando top left to low right
        for ( int i=0; i < mat.length; i++ ) {
            sum = sum + mat[i][i];
        }
    
        //percorre diagonal: iniciando low left to top right
        for ( int i=mat.length-1, j=0; i >= 0; i--, j++ ) {
            if ( i != j ) sum = sum + mat[i][j];
        }
        
        return sum;
    }

}
