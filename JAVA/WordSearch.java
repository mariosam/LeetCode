/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class WordSearch {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", exist( new char[][]{}, "ABCCED" ));
    }

    public static boolean exist(char[][] board, String word) {
        if (word.length() == 0) {
            return false;
        }
        char[] b = word.toCharArray();
        for (int x = 0; x < board.length; x++) {
            for (int y = 0; y < board[x].length; y++) {
                if (dfs(x, y, board, b)) {
                    return true;
                }
            }
        }
        return false;
    }

    private static boolean dfs(int x, int y, char[][] board, char[] word) {
        if (x < 0 || x >= board.length) {
            return false;
        }
        if (y < 0 || y >= board[x].length) {
            return false;
        }
        if (board[x][y] != word[0]) {
            return false;
        }
        if (word.length == 1) {
            return true;
        }
        char tmp = board[x][y];
        board[x][y] = '-';
        boolean found = dfs(x + 1, y, board, Arrays.copyOfRange(word, 1, word.length)) ||
                        dfs(x - 1, y, board, Arrays.copyOfRange(word, 1, word.length)) ||
                        dfs(x, y + 1, board, Arrays.copyOfRange(word, 1, word.length)) ||
                        dfs(x, y - 1, board, Arrays.copyOfRange(word, 1, word.length));
        board[x][y] = tmp;
        return found;
    }
}
