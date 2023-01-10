/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class CheckEveryRowColumnContainsNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", checkValid( new int[][]{{1,2},{2,1}} ));
    }

    public static boolean checkValid(int[][] matrix) {
        Stack<Integer> arTemp = new Stack<Integer>();

        //se possui apenas 1 elemento no array
        if ( matrix.length == 1 ) return true;
    
        //percorre as linhas
        for ( int i=0; i < matrix.length; i++ ) {
            for ( int j=0; j < matrix[i].length; j++ ) {
                //se tem algum numero repetido na linha
                if ( arTemp.contains(matrix[i][j]) ) return false;
                //guarda o valor temporariamente
                arTemp.push( matrix[i][j] );
            }
            arTemp = new Stack<Integer>();
        }
    
        //percorre as colunas
        for ( int i=0; i < matrix.length; i++ ) {
            for ( int j=0; j < matrix.length; j++ ) {
                //se tem algum numero repetido na coluna
                if ( arTemp.contains(matrix[j][i]) ) return false;
                //guarda o valor temporariamente
                arTemp.push( matrix[j][i] );
            }
            arTemp = new Stack<Integer>();
        }
        
        return true;
    }

}
