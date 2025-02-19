/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LetterTilePossibilities {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numTilePossibilities( "teste" ));
    }

    public static int numTilePossibilities(String tiles) {
        int[] record = new int[26];
        for (char c: tiles.toCharArray()) {
            record[c - 'A']++;
        }
        
        return dfs(record);
    }

    public static int dfs(int[] arr) {
        int sum = 0;
        for (int i = 0; i < 26; i++) {
            if (arr[i] == 0) {
                continue;
            }
            sum++;
            arr[i]--;
            sum += dfs(arr);
            arr[i]++;
        }

        return sum;
    }

}
