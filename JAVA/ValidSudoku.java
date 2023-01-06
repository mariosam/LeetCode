/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Stack;

public class ValidSudoku {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isValidSudoku( new char[][]{{'5','3','.','.','7','.','.','.','.'},{'6','.','.','1','9','5','.','.','.'},{'.','9','8','.','.','.','.','6','.'},{'8','.','.','.','6','.','.','.','3'},{'4','.','.','8','.','3','.','.','1'},{'7','.','.','.','2','.','.','.','6'},{'.','6','.','.','.','.','2','8','.'},{'.','.','.','4','1','9','.','.','5'},{'.','.','.','.','8','.','.','7','9'}} ));
    }

    public static boolean isValidSudoku(char[][] board) {
        //verifica se as linhas sao validas
        boolean check = isValidSequence(0, 0, 9, 9, "lin", board);
        if (! check) return false;
    
        //verifica se as colunas sao validas
        check = isValidSequence(0, 0, 9, 9, "col", board);
        if (! check) return false;
    
        //verifica se o quadrante 1 eh valido
        check = isValidSequence(0, 0, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 2 eh valido
        check = isValidSequence(0, 3, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 3 eh valido
        check = isValidSequence(0, 6, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 4 eh valido
        check = isValidSequence(3, 0, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 5 eh valido
        check = isValidSequence(3, 3, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 6 eh valido
        check = isValidSequence(3, 6, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 7 eh valido
        check = isValidSequence(6, 0, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 8 eh valido
        check = isValidSequence(6, 3, 3, 3, "", board);
        if (! check) return false;
    
        //verifica se o quadrante 9 eh valido
        return  isValidSequence(6, 6, 3, 3, "", board);
    }

    /**
     * @param {int} iniI de onde inicia a contagem de linha
     * @param {int} iniJ de onde inicia a cnotagem de coluna
     * @param {int} x onde encerra a contagem de linha
     * @param {int} y onde encerra a contagem de coluna
     * @param {String} quadros como o array deve ser percorrido
     * @param {character[][]} board $board contem os dados a serem analisados
     * @return {boolean}
     */
    public static boolean isValidSequence(int iniI, int iniJ, int x, int y, String quadros, char[][] board) {
        Stack<Integer> arTemp = new Stack<Integer>();
        char numero = '.';
        x = x + iniI;
        y = y + iniJ;

        //percorre o quadro
        for ( int i=iniI; i < x; i++ ) {
            for ( int j=iniJ; j < y; j++ ) {
                //valor do quadradinho
                if ( quadros.equalsIgnoreCase("col") ) {
                    numero = board[j][i];
                } else { 
                    numero = board[i][j];
                }
                //ignora os espacos vazios '.'
                if ( numero == '.' ) continue;
                //se o valor ja foi lido antes, sudoku invalido
                if ( arTemp.contains( Character.getNumericValue( numero ) ) ) return false;
                //guarda o valor temporariamente
                arTemp.push( Character.getNumericValue( numero ) );
            }
            if (! quadros.equals("") ) arTemp = new Stack<Integer>();
        }
        return true;
    }

}
